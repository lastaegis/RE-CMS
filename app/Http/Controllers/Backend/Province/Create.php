<?php

namespace App\Http\Controllers\Backend\Province;

use App\Http\Models\ProvinceModel;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Create extends Controller
{

    protected $countryRepository;
    protected $provinceRepository;
    protected $provinceModel;
    public function __construct()
    {
        $this->provinceModel        = new ProvinceModel();
        $this->countryRepository    = new CountryRepository();
        $this->provinceRepository   = new ProvinceRepository();
    }

    /**
     * Use to show province form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        $data["countryList"] = $this->countryRepository->findAll();
        return view("backend.province.create", $data);
    }

    /**
     * Use to submit data province
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function submit(Request $request)
    {
        $this->provinceModel->country_id    = $request->countryId;
        $this->provinceModel->province      = $request->province;
        $this->provinceModel->slug          = str_replace(" ", "-", strtolower($request->province));
        $result = $this->provinceRepository->save($this->provinceModel);
        if($result)
        {
            return redirect("admin/province");
        }
    }
}
