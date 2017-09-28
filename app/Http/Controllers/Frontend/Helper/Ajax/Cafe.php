<?php

namespace App\Http\Controllers\Frontend\Helper\Ajax;

use App\Http\Repository\Implement\CafeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Cafe
 * @package App\Http\Controllers\Frontend\Helper\Ajax
 */
class Cafe extends Controller
{
    /**
     * @var CafeRepository
     */
    protected $cafeRepository;

    /**
     * Cafe constructor.
     */
    public function __construct()
    {
        $this->cafeRepository = new CafeRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDetailById(Request $request)
    {
        $cafeId = Crypt::decryptString($request->cafeId);
        $cafe = $this->cafeRepository->findById($cafeId);
        return response()->json($cafe);
    }
}
