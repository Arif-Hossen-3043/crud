<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function show_login()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        if ($request->email == 'arit@test.com' && $request->password == '11111111') {

            session(['user' => $request->email]);

            return redirect()->route('show');
        }

        return back()->withErrors(['Invalid credentials']);
    }
}
