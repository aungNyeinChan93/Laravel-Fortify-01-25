<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home
    public function home()
    {
        return view("user.home");
    }
}
