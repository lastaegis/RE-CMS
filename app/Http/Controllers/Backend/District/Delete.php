<?php

namespace App\Http\Controllers\Backend\District;

use App\Http\Repository\Implement\DistrictRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Delete
 * @package App\Http\Controllers\Backend\District
 */
class Delete extends Controller
{
    /**
     * @var DistrictRepository
     */
    protected $districtRepository;

    /**
     * Delete constructor.
     */
    public function __construct()
    {
        $this->districtRepository = new DistrictRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $districtId = $request->get("districtId");
        $data["districtData"] = $this->districtRepository->findById($districtId);
        return view("backend.district.delete", $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $districtId = Crypt::decryptString($request->districtId);
        $result = $this->districtRepository->delete($districtId);
        if($result)
        {
            return redirect()
                ->route('admin.district')
                ->with('success_message','Delete district success');
        }
    }
}
