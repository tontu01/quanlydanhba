<?php

namespace App\Http\Controllers\Backend;

use App\Model\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function showFormLogin()
    {
//        if (backendIsLogin()) {
//            return redirect()->route(backendRouterName('khoa.list'));
//        }

        return view('backend.auth.login');
    }

    public function postLogin()
    {
        $emailUsername = request('email');
        $password = request('password');
        $admin = Admin::where('email', $emailUsername)->first();
        $checkLogin = false;

        if (!empty($admin)) {
            $checkLogin = Hash::check($password, $admin->password);
        }

        if ($checkLogin) {
            backendGuard()->login($admin);
            return redirect()->route('backend.khoa.list');
        }

        return redirect()->back()->withErrors('Tài khoản không tồn tại')->withInput(request()->all());
    }

    public function logout()
    {
        backendGuard()->logout();
        return redirect()->route(backendRouterName('login'));
    }
}