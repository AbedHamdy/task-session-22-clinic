<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClintDoctorsController extends Controller
{
    public function index()
    {
        return view("clint.pages.doctors");
    }
}
