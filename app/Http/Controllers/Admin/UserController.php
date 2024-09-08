<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(public UserService $userService)
    {

    }

    public function users()
    {
        $users = $this->userService->getUsers([['email_verified_at', null, '!=']], 15);
        return view('admin.user.index', compact('users'));
    }

    public function delete(Request $request)
    {
        $user_id = $request->id;
        $user = $this->userService->getById($user_id);

        if(!$user) {
            return response()
                ->json(
                    [
                        'message' => 'İstifadəçi tapılmadı!',
                        'code' => 404
                    ]
                    ,404);
        }

        $delete = $this->userService->setUser($user)->delete();

        return response()->json([
            'status' => $delete,
            'code' => 200
        ], 200);
    }

    public function changeStatus(Request $request) {
        $user_id = $request->id;
        $user = $this->userService->getById($user_id);

        if(!$user) {
            return response()
                ->json(
                    [
                        'message' => 'İstifadəçi tapılmadı!',
                        'code' => 404
                    ]
                    ,404);
        }

        $data = ['is_active' => !$user->is_active];

        $status = $this->userService->setUser($user)->setPrepareData($data)->update();

        return response()->json([
            'user' => $user,
            'code' => 200
        ], 200);
    }

    public function changeBlockedStatus(Request $request) {
        $user_id = $request->id;
        $user = $this->userService->getById($user_id);

        if(!$user) {
            return response()
                ->json(
                    [
                        'message' => 'İstifadəçi tapılmadı!',
                        'code' => 404
                    ]
                    ,404);
        }

        $data = ['is_blocked' => !$user->is_blocked];

        $status = $this->userService->setUser($user)->setPrepareData($data)->update();

        return response()->json([
            'user' => $user,
            'code' => 200
        ], 200);
    }
}
