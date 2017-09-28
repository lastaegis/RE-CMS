<?php

namespace App\Http\Controllers\Backend\Country;

use App\Http\Models\CountryModel;
use App\Http\Repository\Implement\CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Update
 * @package App\Http\Controllers\Backend\Country
 */
class Update extends Controller
{
    /**
     * @var CountryModel
     */
    protected $countryModel;
    /**
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * Update constructor.
     */
    public function __construct()
    {
        $this->countryRepository    = new CountryRepository();
        $this->countryModel         = new CountryModel();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function view(Request $request)
    {
        $countryId = $request->get("countryId");
        $data["countryData"] = $this->countryRepository->findById($countryId);
        return view("backend.country.update", $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function submit(Request $request)
    {
        $countryId                      = Crypt::decryptString($request->countryId);
        $this->countryModel             = $this->countryRepository->findById($countryId);
        $this->countryModel->country    = $request->country;
        $this->countryModel->slug       = strtolower($request->country);
        $result = $this->countryRepository->update($this->countryModel, $request->id);
        if($result)
        {
            return redirect()->route('admin.country');
        }
    }
}
