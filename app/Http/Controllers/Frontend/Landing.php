<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Repository\Implement\CafeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Landing extends Controller
{
    protected $cafeRepository;

    public function __construct()
    {
        $this->cafeRepository = new CafeRepository();
    }
    public function view()
    {
        $data["cafeList"] = $this->cafeRepository->findActiveCafe();
        return view("frontend.landing", $data);
    }
}
