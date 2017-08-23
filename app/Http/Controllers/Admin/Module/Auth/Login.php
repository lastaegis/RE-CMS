<?php

namespace App\Http\Controllers\Admin\Module\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Login extends Controller
{
    function __construct()
    {

    }

    /**
     * Used for show login page for admin
     * URL: http://localhost/re-cms/admin
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        return view("admin.auth.login");
    }

    public function loginProcess()
    {

    }
}
