<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){

        $data['employeedata'] = [
            'name' => 'Aung Ko Ko',
            'email' => 'aungkoko@gmail.com',
            'phone' => '0123456'
        ];
        // printထုတ်တာ  dataတွေ caculate အောင် စစ်တာ
        // dd($data);


        return view('employees/index',$data);
    }

    public function passingdataone(){
        $fullname = "Honey Nway Oo";
        $city = "Mandalay";

        // return view('employees/dataone',["fullname"=>$fullname]);
        return view('employees/dataone',["fullname"=>$fullname,"city"=>$city]);
    }

    public function passingdatatwo(){
        $greeting = "Have a nice day";
        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "011111"
        ];

        // dd($students);
        return view('employees/datatwo',["greeting"=>$greeting,'students'=>$students]);
    }

    // with
    public function passingdatathree(){

        $greeting = "Have a nice day";
        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "011111"
        ];

        return view("employees/datathree")->with("greeting",$greeting)->with("students",$students);
    }

    // Compact
    public function passingdatafour(){

        $greeting = "Have a nice day";
        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "011111"
        ];

        // return view("employees/datafour",compact("greeting","students"));
        // return view("employees/datafour",compact("greeting"),compact("students"));
        // return view("employees/datafour",compact("greeting"))->with("students",$students);
        // return view("employees/datafour",compact("greeting"))->with(compact("greeting","students"));
        return view("employees/datafour",compact("greeting"))->with(compact("greeting"))->with(compact("students"));
    }
}
