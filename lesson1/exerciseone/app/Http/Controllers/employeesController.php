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
        $students = [
            "Honey Nway Oo",
            "Mandalay",
            "011111"
        ];

        // dd($students);
        return view('employees/datatwo',['students'=>$students]);
    }
}
