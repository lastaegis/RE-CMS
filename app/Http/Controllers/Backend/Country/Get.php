<?php

namespace App\Http\Controllers\Backend\Country;

use App\Http\Models\AccountModels;
use App\Http\Models\CountryModel;
use App\Http\Repository\Implement\CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Get extends Controller
{
    protected $countryRepository;
    protected $countryModel;
    public function __construct()
    {
        $this->countryRepository    = new CountryRepository();
        $this->countryModel         = new CountryModel();
    }

    /**
     * Used to show country interface in client
     * @return \Illuminate\Http\JsonResponse
     */
    public function view()
    {
        return view("backend.country.list");
    }
}