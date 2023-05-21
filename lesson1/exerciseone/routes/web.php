<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    // rout name ,call back function
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayar', function(){
    return "Hay,Sayar Nya Kaung Lar ??";

});

Route::get("/sayhi",function(){
    return "Hi Mingalar Par";
});

// Route::get("/about",function(){
//     return view("aboutme");
// });


// (or)

Route::view("about","aboutme");

// Route::get("/sayhi",function(){
//     return view("aboutcompany");
// });

// (or)

Route::view("/about/company","aboutcompany");

// Route::get("contant",function(){
//     return redirect("about");
// });


// (or)

Route::redirect("contant","about/company");
