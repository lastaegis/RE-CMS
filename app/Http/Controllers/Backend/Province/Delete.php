<?php

namespace App\Http\Controllers\Backend\Province;

use App\Http\Models\ProvinceModel;
use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Delete
 * @package App\Http\Controllers\Backend\Province
 */
class Delete extends Controller
{
    protected $provinceModel;
    /**
     * @var ProvinceRepository
     */
    protected $provinceRepository;

    /**
     * Delete constructor.
     */
    public function __construct()
    {
        $this->provinceModel        = new ProvinceModel();
        $this->provinceRepository   = new ProvinceRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $provinceId = $request->get('provinceId');
        $data["provinceData"] = $this->provinceRepository->findById($provinceId);
        return view("backend.province.delete", $data);
    }

    public function submit(Request $request)
    {
        $provinceId = Crypt::decryptString($request->provinceId);
        $result = $this->provinceRepository->delete($provinceId);
        if($result)
        {
            return redirect()
                ->route('admin.province')
                ->with('success_message', 'Province delete success');
        }
    }
}
