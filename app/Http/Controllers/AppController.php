<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function privacy(){
        return view('app/privacy');
    }

    public function terms(){
        return view('app/terms');
    }
}
