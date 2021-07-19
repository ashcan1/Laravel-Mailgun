<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function index(){
    return  http::get("https://api.mailgun.net/sandbox61560130c2754bcfabe681b59a9a34c1.mailgun.org/");
}
}