<?php

use Illuminate\Support\Facades\Route;

// shotcut create
use App\Http\Controllers\studentsController;

use App\Http\Controllers\staffscontroller;

use App\Http\Controllers\employeesController;



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

Route::view("about","aboutme")->name('profiles');

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


Route::get("about/company/{staff}",function($staff){
    return view("aboutcompanystaff",['sf'=>$staff]);
});

Route::get('about/company/{staff}/{city}',function($staff,$city){
    return view('aboutcomapanystaffbycity',['sf'=>$staff,'ct'=>$city]);
});


Route::get('profile',function(){
    return view('profileme');
})->name('profiles');
// route naming

//students controller
// first parameter controller path လမ်းကြောင်း
// first parameter က function name
// Route::get('/students',[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
// Route::get('/students/show',[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
// Route::get('/students/edit',[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');


// => Route::group()

// Route::group(['prefix'=>'students/'],function(){

//     Route::get('/',[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
//     Route::get('/show',[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
//     Route::get('/edit',[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');

// });

// => Route -> name() group

Route::name('students.')->group(function(){

    // အပေါ်မှာ user နဲ့ ဘုံ ထုတ်လိုက်တာ
    Route::get('students/',[studentsController::class,'index'])->name('index');
    Route::get('students/show',[studentsController::class,'show'])->name('show');
    Route::get('students/edit',[studentsController::class,'edit'])->name('edit');

});

Route::get('/staffs',[staffsController::class,'home'])->name('staffs.home');
Route::get('/staffsparty',[staffsController::class,'party'])->name('staffs.party');
Route::get('/staffsparty/{total}',[staffsController::class,'partytotal'])->name('staffs.total');
Route::get('/staffsparty/{total}/{status}',[staffsController::class,'partytotalconfirm'])->name('staffs.status');



Route::get('/employees',[employeesController::class,'index'])->name('employees.index');
Route::get('/employees/show',[employeesController::class,'index'])->name('employees.show');
Route::get('/employees/passingdataone',[employeesController::class,'passingdataone'])->name('employees.passingdataone');
Route::get('/employees/passingdatatwo',[employeesController::class,'passingdatatwo'])->name('employees.passingdatatwo');
Route::get('/employees/passingdatathree',[employeesController::class,'passingdatathree'])->name('employees.passingdatathree');


