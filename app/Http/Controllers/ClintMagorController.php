<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClintMagorController extends Controller
{
    public function index()
    {
        return view("clint.pages.majors");
    }
}
