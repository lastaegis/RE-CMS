<?php

namespace App\Http\Controllers\Backend\Province;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Get extends Controller
{
    public function __construct()
    {
    }

    /**
     * Use to show province list
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        return view("backend.province.list");
    }
}
