<?php

namespace App\Http\Controllers\Backend\Cafe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Read extends Controller
{
    public function __construct()
    {
    }

    public function view()
    {
        return view("backend.cafe.index");
    }
}
