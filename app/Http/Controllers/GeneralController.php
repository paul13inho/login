<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home() {
        return view("home");
    }

    public function terms() {
        return view("terms");
    }
}
