<?php

namespace App\Http\Controllers\Backend\City;

use App\Http\Repository\Implement\CityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Delete
 * @package App\Http\Controllers\Backend\City
 */
class Delete extends Controller
{
    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * Delete constructor.
     */
    public function __construct()
    {
        $this->cityRepository = new CityRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $cityId = $request->get('cityId');
        $data["cityData"] = $this->cityRepository->findById($cityId);
        return view('backend.city.delete', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $cityId = Crypt::decryptString($request->cityId);
        $result = $this->cityRepository->delete($cityId);
        if($result)
        {
            return redirect()
                ->route('admin.city')
                ->with('success_message','Delete city success');
        }
    }
}
