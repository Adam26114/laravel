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
}
