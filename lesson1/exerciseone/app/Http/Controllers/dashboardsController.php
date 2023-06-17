<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardsController extends Controller
{
    public function index(){

        $hay = "hay hay";
        return view('layouts/index',compact("hay"));
    }
}
