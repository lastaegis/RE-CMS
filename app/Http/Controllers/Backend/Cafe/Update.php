<?php

namespace App\Http\Controllers\Backend\Cafe;

use App\Http\Models\CafeFileModel;
use App\Http\Models\CafeModel;
use App\Http\Repository\Implement\CafeFileRepository;
use App\Http\Repository\Implement\CafeRepository;
use App\Http\Repository\Implement\CityRepository;
use App\Http\Repository\Implement\CountryRepository;
use App\Http\Repository\Implement\DistrictRepository;
use App\Http\Repository\Implement\FileRepository;
use App\Http\Repository\Implement\ProvinceRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

/**
 * Class Update
 * @package App\Http\Controllers\Backend\Cafe
 */
class Update extends Controller
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
     * @var CountryRepository
     */
    protected $countryRepository;

    /**
     * @var ProvinceRepository
     */
    protected $provinceRepository;

    /**
     * @var CityRepository
     */
    protected $cityRepository;

    /**
     * @var DistrictRepository
     */
    protected $districtRepository;

    /**
     * @var CafeRepository
     */
    protected $cafeRepository;

    /**
     * @var FileRepository
     */
    protected $fileRepository;

    /**
     * @var
     */
    protected $cafeFileRepository;

    /**
     * Update constructor.
     */
    public function __construct()
    {
        $this->cafeModel            = new CafeModel();
        $this->cafeFileModel        = new CafeFileModel();
        $this->countryRepository    = new CountryRepository();
        $this->provinceRepository   = new ProvinceRepository();
        $this->cityRepository       = new CityRepository();
        $this->districtRepository   = new DistrictRepository();
        $this->cafeRepository       = new CafeRepository();
        $this->fileRepository       = new FileRepository();
        $this->cafeFileRepository   = new CafeFileRepository();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function view(Request $request)
    {
        $cafeId = $request->get("cafeId");
        $data["cafeData"] = $this->cafeRepository->findById($cafeId);
        $data["countryList"] = $this->countryRepository->findAll();
        $data["provinceList"] = $this->provinceRepository->findByCountry($data["cafeData"]->district->city->province->country_id);
        $data["cityList"] = $this->cityRepository->findByProvinceId($data["cafeData"]->district->city->province_id);
        $data["districtList"] = $this->districtRepository->findByCityId($data["cafeData"]->district->city_id);
        $data["fileList"] = $this->fileRepository->findAll();
        $data["selectedSlider"] = $this->makeArraySelectedSlider($this->cafeFileRepository->findGalleryByCafeId($data["cafeData"]->id));
        $data["selectedThumbnail"] = $this->cafeFileRepository->findThumbnailByCafeId($data["cafeData"]->id);
        return view("backend.cafe.update", $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $cafeId = $this->updateCafe($request);
        $result = $this->updateCafeFile($request, $cafeId);
        if($result){
            return redirect()
                ->route('admin.cafe')
                ->with('success_message','Update Cafe Success');
        }
    }

    /**
     * @param $sliderList
     * @return array
     */
    private function makeArraySelectedSlider($sliderList)
    {
        $array = array();
        foreach ($sliderList as $slider)
        {
            array_push($array, $slider->file_id);
        }

        return $array;
    }

    /**
     * @param $request
     * @return mixed
     */
    private function updateCafe($request)
    {
        $cafeId                         = Crypt::decryptString($request->cafeId);
        $this->cafeModel                = $this->cafeRepository->findById($cafeId);
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
        $result = $this->cafeRepository->update($this->cafeModel, $cafeId);
        return $result;
    }

    /**
     * @param $request
     * @param $cafeId
     * @return int
     */
    private function updateCafeFile($request, $cafeId)
    {
        $oldFileId  = $this->cafeFileRepository->findThumbnailByCafeId($cafeId)->file_id;
        $oldData    = $this->makeArraySelectedSlider($this->cafeFileRepository->findGalleryByCafeId($cafeId));
        $newData    = $request->slider;

        $toDelete   = array_diff($oldData, $newData);
        $toSave     = array_diff($newData, $oldData);

        if(!empty($toDelete))
        {
            foreach ($toDelete as $value)
            {
                $this->cafeFileRepository->delete($value, $cafeId);
            }
        }

        if(!empty($toSave))
        {
            foreach ($toSave as $value)
            {
                $cafeFile               = new CafeFileModel();
                $cafeFile->file_id      = $value;
                $cafeFile->cafe_id      = $cafeId;
                $cafeFile->type         = "gallery";
                $this->cafeFileRepository->save($cafeFile);
            }
        }


        $this->cafeFileModel            = $this->cafeFileRepository->findThumbnailByCafeId($cafeId);
        $this->cafeFileModel->file_id   = $request->thumbnail;
        $this->cafeFileRepository->update($this->cafeFileModel, $cafeId, $oldFileId);

        return 1;
    }
}
