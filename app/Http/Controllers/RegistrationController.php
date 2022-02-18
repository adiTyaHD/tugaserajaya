<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        $data['title'] = 'Registration | Web Page';
        return view('registration/index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([

            'first_name' => ['required', 'max:255', 'unique:users'],
            'last_name' => ['required', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'password' => [
                'required_with:password-con', 'same:password-con',
                'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ]
        ]);

        $data = new User;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->email = $request->email;
        $data->is_active = 0;
        $data->roles = "customer";
        $data->password = bcrypt($request['password']);

        $data->save();
        $request->session()->flash('success', 'Registration was Successfully Complete, Please Login!');
        return redirect()->route('login');
    }
}
