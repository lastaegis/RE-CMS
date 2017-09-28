<?php

namespace App\Http\Controllers\Backend\City;

use App\Http\Models\CityModel;
use App\Http\Repository\Implement\CityRepository;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class Create
 * @package App\Http\Controllers\Backend\City
 */
class Create extends Controller
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
     * @var ProvinceRepository
     */
    protected $provinceRepository;
    /**
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * Create constructor.
     */
    public function __construct()
    {
        $this->cityModel            = new CityModel();
        $this->cityRepository       = new CityRepository();
        $this->provinceRepository   = new ProvinceRepository();
        $this->countryRepository    = new CountryRepository();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        $data["countryList"]    = $this->countryRepository->findAll();
        return view('backend.city.create', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $this->cityModel->province_id   = $request->provinceId;
        $this->cityModel->city          = $request->city;
        $this->cityModel->slug          = str_replace(" ","-",strtolower($request->city));
        $result = $this->cityRepository->save($this->cityModel);
        if($result)
        {
            return redirect()
                ->route('admin.city')
                ->with('success_message','City Create Success');
        }
    }
}
