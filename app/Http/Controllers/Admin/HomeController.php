<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('admin');
    }

    public function admin()
    {
        return view('admin');
    }

    public function send_code()
    {
        return view('login');
    }

    public function login(string|null $phone = null)
    {
        return view('login' ,[
            "user_phone" => $phone
        ]);
    }
}
