<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{

    function check(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|exists:admins,email',
                'password' => 'required|min:5|max:20',
            ],
            [
                'email.exists' => 'This is not exist email admin panel',
                'password.exists'=>'This is not error password'
            ]
        );
        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.login')->with('fail', 'please entre the correct password');
        }
    }


    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    //
    // function show()
    // {
    //     $pateint = User::get();
    //     return view('dashboard.admin.adminshow', compact('pateint'));
    // }
}
