<?php

namespace App\Http\Controllers\Backend\District;

use App\Http\Models\DistrictModel;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\DistrictRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class Create
 * @package App\Http\Controllers\Backend\District
 */
class Create extends Controller
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
     * Create constructor.
     */
    public function __construct()
    {
        $this->districtModel        = new DistrictModel();
        $this->districtRepository   = new DistrictRepository();
        $this->countryRepository    = new CountryRepository();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        $data["countryList"] = $this->countryRepository->findAll();
        return view('backend.district.create', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $this->districtModel->city_id   = $request->cityId;
        $this->districtModel->district  = $request->district;
        $this->districtModel->slug      = str_replace(" ","-",strtolower($request->district));
        $result = $this->districtRepository->save($this->districtModel);
        if($result)
        {
            return redirect()
                ->route('admin.district')
                ->with('success_message','Create District Success');
        }
    }
}
