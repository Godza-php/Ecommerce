<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLoginPage()
    {
        return view('dashboard.login');
    }

    public function login(AdminLoginRequest $requset)
    {

    }
}
