<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $data['title'] = 'Login | Web Page';
        return view('login/index', $data);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
            'is_active' => '1',
            'roles' => 'customer'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/customer');
        }
        return back()->with('LoginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('success', 'Logout has been Success!');
        return redirect('login');
    }
}
