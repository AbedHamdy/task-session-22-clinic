<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClintBookingController extends Controller
{
    public function index()
    {
        return view("clint.pages.booking");
    }
}
