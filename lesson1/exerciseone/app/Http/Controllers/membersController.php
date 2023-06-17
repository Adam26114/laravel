<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class membersController extends Controller
{
    public function index(){

        $header = "This is my Fitst template with data passing";

        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "033333"
        ];


        $hay = "Hay Hay";


        return view('members/index',compact('header','students','hay'));
    }
}
