<?php

namespace App\Http\Controllers\Backend\Cafe;

use App\Http\Models\CafeFileModel;
use App\Http\Models\CafeModel;
use App\Http\Repository\Implement\CafeFileRepository;
use App\Http\Repository\Implement\CafeRepository;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\FileRepository;
use App\Http\Repository\Implement\ProvinceRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class Create
 * @package App\Http\Controllers\Backend\Cafe
 */
class Create extends Controller
{
    /**
     * @var CafeModel
     */
    protected $cafeModel;

    /**
     * @var CafeFileModel
     */
    protected $cafeFileModel;

    /**
     * @var CafeRepository
     */
    protected $cafeRepository;

    /**
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * @var FileRepository
     */
    protected $fileRepository;

    /**
     * @var CafeFileRepository
     */
    protected $cafeFileRepository;

    /**
     * Create constructor.
     */
    public function __construct()
    {
        $this->cafeModel            = new CafeModel();
        $this->cafeFileModel        = new CafeFileModel();
        $this->cafeRepository       = new CafeRepository();
        $this->countryRepository    = new CountryRepository();
        $this->fileRepository       = new FileRepository();
        $this->cafeFileRepository   = new CafeFileRepository();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        $data["countryList"]    = $this->countryRepository->findAll();
        $data["fileList"]       = $this->fileRepository->findAll();
        return view("backend.cafe.create", $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $cafeId = $this->createCafe($request);
        $result = $this->createCafeFile($request, $cafeId);
        if($result)
        {
            return redirect()
                ->route('admin.cafe')
                ->with('success_message','Create Cafe Success');
        }
    }

    /**
     * @param $request
     * @return mixed
     */
    private function createCafe($request)
    {
        $this->cafeModel->district_id   = $request->districtId;
        $this->cafeModel->account_id    = 1;
        $this->cafeModel->name          = $request->name;
        $this->cafeModel->address       = $request->address;
        $this->cafeModel->maps          = $request->gmaps;
        $this->cafeModel->start_price   = $request->startPrice;
        $this->cafeModel->end_price     = $request->endPrice;
        $this->cafeModel->open_hour     = $request->openHour;
        $this->cafeModel->close_hour    = $request->closeHour;
        $this->cafeModel->notes         = $request->notes;
        $this->cafeModel->status        = $request->status;
        $this->cafeModel->publish_time  = Carbon::now();
        $result = $this->cafeRepository->save($this->cafeModel);
        return $result;
    }

    /**
     * @param $request
     * @param $cafeId
     * @return int
     */
    private function createCafeFile($request, $cafeId)
    {
        //Create Gallery
        $totalSlider = count($request->slider);
        for ($i = 0; $i < $totalSlider; $i++)
        {
            $cafeFileModel                  = new CafeFileModel();
            $cafeFileModel->cafe_id   = $cafeId;
            $cafeFileModel->file_id   = $request->slider[$i];
            $cafeFileModel->type      = "gallery";
            $this->cafeFileRepository->save($cafeFileModel);
        }

        //Create Thumbnail
        $this->cafeFileModel->cafe_id   = $cafeId;
        $this->cafeFileModel->file_id   = $request->thumbnail;
        $this->cafeFileModel->type      = "thumbnail";
        $this->cafeFileRepository->save($this->cafeFileModel);

        return 1;
    }
}
