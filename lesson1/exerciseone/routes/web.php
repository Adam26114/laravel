<?php

use Illuminate\Support\Facades\Route;

// shotcut create
use App\Http\Controllers\studentsController;

use App\Http\Controllers\staffscontroller;

use App\Http\Controllers\employeesController;

use App\Http\Controllers\dashboardsController;
use App\Http\Controllers\membersController;
use Faker\Provider\bg_BG\PhoneNumber;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use Illuminate\Support\Facades\DB;

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

Route::get('/sayar', function () {
    return "Hay,Sayar Nya Kaung Lar ??";
});

Route::get("/sayhi", function () {
    return "Hi Mingalar Par";
});

// Route::get("/about",function(){
//     return view("aboutme");
// });


// (or)

Route::view("about", "aboutme")->name('profiles');

// Route::get("/sayhi",function(){
//     return view("aboutcompany");
// });

// (or)

Route::view("/about/company", "aboutcompany");

// Route::get("contant",function(){
//     return redirect("about");
// });


// (or)

Route::redirect("contant", "about/company");


Route::get("about/company/{staff}", function ($staff) {
    return view("aboutcompanystaff", ['sf' => $staff]);
});

Route::get('about/company/{staff}/{city}', function ($staff, $city) {
    return view('aboutcomapanystaffbycity', ['sf' => $staff, 'ct' => $city]);
});


Route::get('profile', function () {
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

Route::name('students.')->group(function () {

    // အပေါ်မှာ user နဲ့ ဘုံ ထုတ်လိုက်တာ
    Route::get('students/', [studentsController::class, 'index'])->name('index');
    Route::get('students/show', [studentsController::class, 'show'])->name('show');
    Route::get('students/edit', [studentsController::class, 'edit'])->name('edit');
});

Route::get('/staffs', [staffsController::class, 'home'])->name('staffs.home');
Route::get('/staffsparty', [staffsController::class, 'party'])->name('staffs.party');
Route::get('/staffsparty/{total}', [staffsController::class, 'partytotal'])->name('staffs.total');
Route::get('/staffsparty/{total}/{status}', [staffsController::class, 'partytotalconfirm'])->name('staffs.status');



Route::get('/employees', [employeesController::class, 'index'])->name('employees.index');
// Route::get('/employees/show',[employeesController::class,'index'])->name('employees.show');
Route::get('/employees/show', [employeesController::class, 'show'])->name('employees.show');
Route::get('/employees/passingdataone', [employeesController::class, 'passingdataone'])->name('employees.passingdataone');
Route::get('/employees/passingdatatwo', [employeesController::class, 'passingdatatwo'])->name('employees.passingdatatwo');
Route::get('/employees/passingdatathree', [employeesController::class, 'passingdatathree'])->name('employees.passingdatathree');
Route::get('/employees/passingdatafour', [employeesController::class, 'passingdatafour'])->name('employees.passingdatafour');
Route::get('/employees/edit', [employeesController::class, 'edit'])->name('employees.edit');
Route::get('/employees/update', [employeesController::class, 'update'])->name('employees.update');

Route::get('/dashboards', [dashboardsController::class, 'index'])->name('dashboards.index');

Route::get('/members', [membersController::class, 'index'])->name('members.index');

// => Data Inset From Route
Route::get("/type/insert", function () {
    DB::insert("INSERT INTO types(name) value(?)", ["pdf"]);
    return "Successfully Inserted";
});


// Route::get("/type/read",function(){
//     $results =  DB::select("SELECT * FROM types");
//     // return var_dump($result);

//     foreach ($results as $type) {
//         echo $type->name . "<br/>";
//     }
// });


// Route::get("/type/read",function(){
//     $result =  DB::select("SELECT * FROM types WHERE id=?",[1]);
//     // return var_dump($result);

//     return $result;
// });


Route::get('/students/insert', function () {
    DB::insert("INSERT INTO students(name,phonenumber,address) VALUE(?,?,?)", ["aung aung", "11111", "yangon"]);
    return "Data Inserted";
});

Route::get("/types/update", function () {
    // DB::update("UPDATE types SET name='ebook' WHERE id=?",[4]);
    // DB::update("UPDATE types SET name='pdf' WHERE id=?",[4]);

    return "Data Updated";
});

Route::get("/shoppers/update", function () {
    DB::update("UPDATE shoppers SET fullname=?,phonenumber=?,city=? WHERE id=?", ["kyaw kyaw", "22222", "bago", 2]);
    return "Data Updated";
});

Route::get("/shoppers/delete", function () {
    DB::update("DELETE FROM shoppers WHERE id=?", [2]);
    return "Data Deleted";
});

Route::get("/shoppers/read", function () {

    // $results= DB::select("SELECT * FROM shoppers");
    // $results= DB::select("SELECT * FROM shoppers WHERE id=?",[6]);

    // =>select(columns)
    // $results = DB::table('shoppers')->select('*')->get();

    // =>select(expression)
    // $results = DB::table('shoppers')->selectRaw('*')->get();


    // $results = DB::table('shoppers')->select(DB::raw('*'))->get();
    // $results = DB::table('shoppers')->selectRaw(DB::raw('*'))->get();


    // $results = DB::table('shoppers')->select('*')->where('id',5)->get();
    // $results = DB::table('shoppers')->select('fullname')->where('id',5)->get();
    // $results = DB::table('shoppers')->select('fullname','phonenumber')->where('id',5)->get();
    // $results = DB::table('shoppers')->select('fullname','phonenumber','city')->where('id',5)->get();
    // $results = DB::table('shoppers')->select('fullname','phonenumber','city')->where('id','<>',5)->get();


    // $results = DB::table('shoppers')->select(DB::raw('*'))->where('id',5)->get();
    // $results = DB::table('shoppers')->select(DB::raw('fullname'))->where('id',5)->get();
    // $results = DB::table('shoppers')->select(DB::raw('fullname,phonenumber'))->where('id',5)->get();
    // $results = DB::table('shoppers')->select(DB::raw('fullname,phonenumber,city'))->where('id',5)->get();



    // $results = DB::table('shoppers')->selectRaw('*')->where('id',5)->get();
    // $results = DB::table('shoppers')->selectRaw('fullname')->where('id',5)->get();
    // $results = DB::table('shoppers')->selectRaw('fullname,phonenumber')->where('id',5)->get();
    // $results = DB::table('shoppers')->selectRaw('fullname,phonenumber,city')->where('id',5)->get();
    // $results = DB::table('shoppers')->selectRaw('fullname,phonenumber,city')->where('id','<>',5)->get();


    // $results = DB::table('shoppers')->selectRaw(DB::raw('*'))->where('id',5)->get();
    // $results = DB::table('shoppers')->selectRaw(DB::raw('fullname'))->where('id',5)->get();
    // $results = DB::table('shoppers')->selectRaw(DB::raw('fullname,phonenumber'))->where('id',5)->get();
    // $results = DB::table('shoppers')->selectRaw(DB::raw('fullname,phonenumber,city'))->where('id',5)->get();


    // ! error
    // $results = DB::table('shoppers')->select("count(*) AS totalshopper,city")->where('id','<>',5)->groupBy('city')->get();

    // * oki
    // $results = DB::table('shoppers')->select(DB::raw("count(*) AS totalshopper,city"))->where('id','<>',5)->groupBy('city')->get();



    // $results = DB::table('shoppers')->selectRaw("count(*) AS totalshopper,city")->where('id','<>',5)->groupBy('city')->get();
    // $results = DB::table('shoppers')->selectRaw(DB::raw("count(*) AS totalshopper,city"))->where('id','<>',5)->groupBy('city')->get();

    // $results = DB::table('shoppers')->first();

    // =>pluck(value,key)

    $results = DB::table('shoppers')->pluck('fullname'); // array
    $results = DB::table('shoppers')->pluck('fullname','id'); // object

    return $results;
});
