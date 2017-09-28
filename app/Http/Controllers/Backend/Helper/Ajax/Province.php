<?php

namespace App\Http\Controllers\Backend\Helper\Ajax;

use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class Province
 * @package App\Http\Controllers\Backend\Helper\Ajax
 */
class Province extends Controller
{
    /**
     * @var ProvinceRepository
     */
    protected $provinceRepository;

    /**
     * Province constructor.
     */
    public function __construct()
    {
        $this->provinceRepository = new ProvinceRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByCountry(Request $request)
    {
        $province = $this->provinceRepository->findByCountry($request->countryId);
        return response()->json($province);
    }
}
