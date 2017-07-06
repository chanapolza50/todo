<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControll extends Controller
{
    public function index()
    {
        return view("welcome");
    }
    public function  cal($num1,$num2)
    {
        return $num1+$num2;
    }

}
