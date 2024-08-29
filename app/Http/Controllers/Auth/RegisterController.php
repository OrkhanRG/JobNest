<?php

namespace App\Http\Controllers\Auth;

use App\Events\ForgotPasswordEvent;
use App\Events\UserVerificationEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->only('name', 'surname', 'username', 'email',  'password', 'company', 'website', 'address');
        $data['is_active'] = 1;
        $data['role'] = $request->account_type === 'company' ? 'company' : 'candidate';

        $user = User::query()->create($data);

        event(new UserVerificationEvent($user));

        alert()->info('İnfo','Sizə doğrulama e-maili göndərildi, zəhmət olmasa emailiniz eyni zamanda spam qovuluğunu yoxlamağı unutmayın');
        return redirect()->route('login');
    }

    public function verify(string $token)
    {
        $cache_key = 'user-verification-token-'.$token;
        $user_id = Cache::get($cache_key);

        if (!$user_id) {
            $user = User::query()->where('token', $token)->first();
            if ($user && !$user->hasVerifiedEmail()){
                $user->delete();
            }
            alert()->warning('Diqqət','Token istifadə müddəti bitmişdir, zəhmət olmasa yenidən qeydiyyatdan keçin');
            return redirect()->route('login');
        }

        $user = User::query()->find($user_id);

        $user->update([
            'email_verified_at' => now(),
            'token' => NULL
        ]);
        Cache::forget($cache_key);

        if ($user->hasVerifiedEmail()) {
            Auth::login($user);
            //register olanda auth olmur, bunu fix et
        }

        alert()->success('Təbriklər','Sizin hesabınız doğrulandı!');
        return redirect()->route('login');
    }

    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->email;
        $user = User::query()->where('email', $email)->first();

        if (!$user) {
            alert()->error('Diqqət!', 'Daxil etdiyiniz e-mail yanlışdır');
            return redirect()->back()->withInput();
        }

        event(new ForgotPasswordEvent($user));

        alert()->success('Təbriklər!', 'Sizə doğrulama e-mail göndərildi. E-mail və spam qovluğuna nəzər yetirməyi unutmayın');
        return redirect()->route('login');
    }

    public function forgotPasswordVerify(string $token)
    {
        $cache_key = 'forgot-password-token-'.$token;
        $user_id = Cache::get($cache_key);

        if (!$user_id) {
            alert()->warning('Diqqət','Token istifadə müddəti bitmişdir, zəhmət olmasa yenidən qeydiyyatdan keçin');
            return redirect()->route('login');
        }

        return view('auth.change-password', compact('token'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => ['min:6', 'required_with:password_confirmation', 'same:password_confirmation'],
            'password_confirmation' => ['min:6'],
        ]);

        $cache_key = 'forgot-password-token-'.$request->verify_token;
        $user_id = Cache::get($cache_key);

        $user = User::query()->find($user_id);

        if (!$user){
            alert()->error('Diqqət','İstifadəçi tapılmadı!');
            return redirect()->route('login');
        }

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        Cache::forget($cache_key);

        alert()->success('Təbriklər!','Şifrəniz dəyişdirildi.');
        return redirect()->route('login');
    }
}
