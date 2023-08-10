<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers;

class ecommerceController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

}
