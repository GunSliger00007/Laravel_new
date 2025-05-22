<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(){
        return ('login');
    }
    function register(){
        return ('register');
    }
    function dashboard()
    {
        return ('dashboard');
    }
}
