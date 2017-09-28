<?php

namespace App\Http\Controllers\Backend\District;

use App\Http\Models\DistrictModel;
use App\Http\Repository\Implement\CityRepository;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\DistrictRepository;
use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Update
 * @package App\Http\Controllers\Backend\District
 */
class Update extends Controller
{
    /**
     * @var DistrictModel
     */
    protected $districtModel;

    /**
     * @var DistrictRepository
     */
    protected $districtRepository;

    /**
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * @var ProvinceRepository
     */
    protected $provinceRepository;

    /**
     * Update constructor.
     */
    public function __construct()
    {
        $this->districtModel        = new DistrictModel();
        $this->countryRepository    = new CountryRepository();
        $this->provinceRepository   = new ProvinceRepository();
        $this->cityRepository       = new CityRepository();
        $this->districtRepository   = new DistrictRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $districtId             = $request->districtId;
        $data["districtData"]   = $this->districtRepository->findById($districtId);
        $data["countryList"]    = $this->countryRepository->findAll();
        $data["provinceList"]   = $this->provinceRepository->findByCountry($data["districtData"]->city->province->country_id);
        $data["cityList"]       = $this->cityRepository->findByProvinceId($data["districtData"]->city->province_id);
        return view('backend.district.update', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $districtId = Crypt::decryptString($request->districtId);
        $this->districtModel            = $this->districtRepository->findById($districtId);
        $this->districtModel->city_id   = $request->cityId;
        $this->districtModel->district  = $request->district;
        $this->districtModel->slug      = str_replace(" ","-",strtolower($request->district));
        $result = $this->districtRepository->update($this->districtModel, $districtId);
        if($result)
        {
            return redirect()
                ->route('admin.district')
                ->with('success_message','Update district success');
        }
    }
}
