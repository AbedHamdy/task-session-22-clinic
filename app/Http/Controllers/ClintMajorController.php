<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class ClintMajorController extends Controller
{
    public function index()
    {
        $majors = Major::get();
        return view("clint.pages.majors" , compact("majors"));
    }

    // public function show($id)
    // {
    //     $doctors = Major::find($id);
    //     return view("clint.pages.doctors" , compact("doctors"));
    // }
}
