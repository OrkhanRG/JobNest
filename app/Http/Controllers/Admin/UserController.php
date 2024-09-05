<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::query()->whereNotNull('email_verified_at')->paginate('15');
        return view('admin.user.index', compact('users'));
    }
}
