<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');
        $remember = $request->has('remember');

        $user = User::query()
            ->where('email', $data['email'])
            ->where('is_active', 1)
            ->where('is_blocked', 0)
            ->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            alert()->error('Diqqət!', 'Email və ya Şifrə yanlışdır!');
            return redirect()->back();
        }

        if (!$user->hasVerifiedEmail()) {
            alert()->warning('Diqqət!', 'Sizin hesab doğrulanmamışdır, zəhmət olmasa hesabı doğruladıqdan sonra daxil olmağa çalışın');
            return redirect()->back();
        }

        Auth::attempt($data, $remember);

        alert()->success('Təbriklər!', 'Hesaba müvəffəqiyətlə daxil oldunuz.');
        return redirect()->route('user.index');
    }

    public function logout()
    {
        if (!Auth::check()){
            return redirect()->back();
        }
        Auth::logout();

        alert()->success('Təbriklər!', 'Hesabdan müvəffəqiyətlə çıxış edildi.');
        return redirect()->route('front.index');
    }
}
