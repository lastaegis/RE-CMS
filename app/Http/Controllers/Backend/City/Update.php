<?php

namespace App\Http\Controllers\Backend\City;

use App\Http\Models\CityModel;
use App\Http\Repository\Implement\CityRepository;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Update
 * @package App\Http\Controllers\Backend\City
 */
class Update extends Controller
{
    /**
     * @var CityModel
     */
    protected $cityModel;

    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * @var ProvinceRepository
     */
    protected $provinceRepository;

    /**
     * Update constructor.
     */
    public function __construct()
    {
        $this->cityModel            = new CityModel();
        $this->cityRepository       = new CityRepository();
        $this->countryRepository    = new CountryRepository();
        $this->provinceRepository   = new ProvinceRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $cityId = $request->get("cityId");
        $data["cityData"]       = $this->cityRepository->findById($cityId);
        $data["countryList"]    = $this->countryRepository->findAll();
        $data["provinceList"]   = $this->provinceRepository->findByCountry($data["cityData"]->province->country->id);
        return view("backend.city.update", $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $cityId                         = Crypt::decryptString($request->cityId);
        $this->cityModel                = $this->cityRepository->findById($cityId);
        $this->cityModel->province_id   = $request->provinceId;
        $this->cityModel->city          = $request->city;
        $this->cityModel->slug          = str_replace(" ","-", strtolower($request->city));
        $result = $this->cityRepository->update($this->cityModel, $cityId);
        if($result)
        {
            return redirect()
                ->route('admin.city')
                ->with('success_message','Update city success');
        }
    }
}
