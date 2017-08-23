<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Landing extends Controller
{
    public function __construct()
    {
    }

    public function view()
    {
        return view("frontend.landing");
    }
}
