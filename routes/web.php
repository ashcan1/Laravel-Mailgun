<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function() {
    return view('contactPage');
});


Route::post('/contact', function() {
    $data = request(['name', 'email', 'subject', 'message']);
  

    
\Illuminate\Support\Facades\Mail::to('tahmasbiashkan@gmail.com')

->send(new App\Mail\ContactMe($data));

return redirect('/contact')

->with('flash', 'message sent succesfully');

});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("users", [UserCOntroller::class,'index']);

