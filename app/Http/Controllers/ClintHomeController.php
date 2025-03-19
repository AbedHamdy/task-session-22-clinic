<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class ClintHomeController extends Controller
{
    public function index()
    {
        $majors = Major::get();
        $doctors = Doctor::with("major")->get();
        return view("clint.pages.home" , compact( "doctors" , "majors"));
    }
}
