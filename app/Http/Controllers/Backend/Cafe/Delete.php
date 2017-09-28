<?php

namespace App\Http\Controllers\Backend\Cafe;

use App\Http\Repository\Implement\CafeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Delete
 * @package App\Http\Controllers\Backend\Cafe
 */
class Delete extends Controller
{
    /**
     * @var CafeRepository
     */
    protected $cafeRepository;

    /**
     * Delete constructor.
     */
    public function __construct()
    {
        $this->cafeRepository = new CafeRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view(Request $request)
    {
        $cafeId = $request->get("cafeId");
        $data["cafeData"] = $this->cafeRepository->findById($cafeId);
        return view('backend.cafe.delete', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $cafeId = Crypt::decryptString($request->cafeId);
        $result = $this->cafeRepository->delete($cafeId);
        if($result)
        {
            return redirect()
                ->route('admin.cafe')
                ->with('success_message','Delete Cafe Success');
        }
    }
}
