<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Показываем форму логина
    public function showLogin()
    {
        return view('pages.admin.login'); // Blade с формой логина
    }

    // Обрабатываем логин
    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

        if ($admin) {
            $request->session()->put('is_admin', true);
            return redirect()->route('messages.index');
        }

        return back()->with('error', 'Неверный логин или пароль');
    }


    // Logout
    public function logout()
    {
        session()->forget(['is_admin', 'admin_id']);
        return redirect()->route('login');
    }
}
