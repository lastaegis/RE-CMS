<?php

namespace App\Http\Controllers\Backend\Province;

use App\Http\Models\ProvinceModel;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class Update extends Controller
{
    protected $provinceModel;
    protected $provinceRepository;
    protected $countryRepository;
    public function __construct()
    {
        $this->provinceModel        = new ProvinceModel();
        $this->provinceRepository   = new ProvinceRepository();
        $this->countryRepository    = new CountryRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $provinceSlug           = $request->get("provinceId");
        $data["provinceData"]   = $this->provinceRepository->findById($provinceSlug);
        $data["countryList"]    = $this->countryRepository->findAll();
        return view("backend.province.update", $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        $provinceId                     = Crypt::decryptString($request->provinceId);
        $this->provinceModel            = $this->provinceRepository->findById($provinceId);
        $this->provinceModel->province  = $request->province;
        $this->provinceModel->slug      = str_replace(" ","-",strtolower($request->province));
        $result = $this->provinceRepository->update($this->provinceModel, $provinceId);
        if ($result)
        {
            return redirect()
                ->route('admin.province')
                ->with('success_message','Province update success');
        }
    }
}
