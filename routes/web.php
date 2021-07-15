<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


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

    
\Illuminate\Support\Facades\Mail::to('ashki445@gmail.com')

->send(new App\Mail\ContactMe($data));

return redirect('/contact')

->with('flash', 'message sent succesfully');

});