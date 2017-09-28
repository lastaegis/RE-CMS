<?php

namespace App\Http\Controllers\Backend\Helper\Ajax;

use App\Http\Repository\Implement\DistrictRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class District
 * @package App\Http\Controllers\Backend\Helper\Ajax
 */
class District extends Controller
{
    /**
     * @var DistrictRepository
     */
    protected $districtRepository;

    /**
     * District constructor.
     */
    public function __construct()
    {
        $this->districtRepository = new DistrictRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByCity(Request $request)
    {
        $cityId     = $request->cityId;
        $district   = $this->districtRepository->findByCityId($cityId);
        return response()->json($district);
    }
}
