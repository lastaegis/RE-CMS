<?php

namespace App\Http\Controllers\Backend\Helper\Ajax;

use App\Http\Repository\Implement\CityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class City
 * @package App\Http\Controllers\Backend\Helper\Ajax
 */
class City extends Controller
{
    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * City constructor.
     */
    public function __construct()
    {
        $this->cityRepository = new CityRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByProvince(Request $request)
    {
        $city = $this->cityRepository->findByProvinceId($request->provinceId);
        return response()->json($city);
    }
}
