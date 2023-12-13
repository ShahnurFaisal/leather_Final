<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('backend.admin.login');
    }
    public function login()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);

        if (Auth::guard('admin')->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ])) {
            return redirect('admin/dashboard');
        } else {
            return 'credential not matched';
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return to_route('showLogin');
    }
}
