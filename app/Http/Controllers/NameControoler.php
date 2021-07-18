<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NameControoler extends Controller
{
    function list() {
        return user::all();

    }
}
