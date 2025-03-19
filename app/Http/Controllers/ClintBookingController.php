<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class ClintBookingController extends Controller
{
    public function index($id)
    {
        $doctor = Doctor::find($id);
        return view("clint.pages.booking" , compact("doctor"));
    }
}
