<?php

namespace App\Http\Controllers\Auth;

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
        }

        alert()->success('Təbriklər','Sizin hesabınız doğrulandı!');
        return redirect()->route('login');
    }
}
