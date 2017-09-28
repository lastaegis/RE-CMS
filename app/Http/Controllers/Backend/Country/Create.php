<?php

namespace App\Http\Controllers\Backend\Country;

use App\Http\Models\CountryModel;
use App\Http\Repository\Implement\CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    protected $countryModel;
    protected $countryRepository;
    public function __construct()
    {
        $this->countryModel = new CountryModel();
        $this->countryRepository = new CountryRepository();
    }

    /**
     * Use to show form create new country
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        return view('backend.country.create');
    }

    /**
     * Use to submit form create country
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function submit(Request $request)
    {
        $this->countryModel->country    = $request->country;
        $this->countryModel->slug       = strtolower($request->country);
        $result = $this->countryRepository->save($this->countryModel);
        if($result)
        {
            return redirect("admin/country");
        }
    }
}
