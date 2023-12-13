<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $data = array();
        $data['active_menu'] = 'dashboard';
        $data['page_title'] = 'Dashboard';
        return view('backend.dashboard.dashboard', compact('data'));
    }
}
