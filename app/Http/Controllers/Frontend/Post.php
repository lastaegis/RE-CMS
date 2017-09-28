<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Repository\Implement\CafeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Post extends Controller
{
    protected $cafeRepository;

    public function __construct()
    {
        $this->cafeRepository = new CafeRepository();
    }

    public function view(Request $request)
    {
        $cafeId = $request->get("cafeId");
        $data["cafeData"] = $this->cafeRepository->findById($cafeId);
        return view("frontend.post", $data);
    }
}
