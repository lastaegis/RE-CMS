<?php

namespace App\Http\Controllers\Backend\Country;

use App\Http\Repository\Implement\CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class Delete extends Controller
{
    protected $countryRepository;
    public function __construct()
    {
        $this->countryRepository = new CountryRepository();
    }

    /**
     * Use to show form delete country
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $countryId            = $request->get("countryId");
        $data["countryData"]    = $this->countryRepository->findById($countryId);
        return view("backend.country.delete", $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function submit(Request $request)
    {
        $countryId  = Crypt::decryptString($request->countryId);
        $result     = $this->countryRepository->delete($countryId);
        if($result)
        {
            return redirect("admin/country");
        }
    }
}
