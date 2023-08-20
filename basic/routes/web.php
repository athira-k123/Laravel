<?php
use App\Http\Controllers\Basiccontroller;
use Illuminate\Http\Request;
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

Route::get('/', action:[Basiccontroller::class,"home"])->name("home");

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post("/",function(Request $request){
    $name=$request->input('name');
    $email=$request->input('email');
    return view("welcome",['name'=>$name,'email'=>$email]);
});

   

