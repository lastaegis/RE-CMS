<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/28/17
 * Time: 13:03
 */

namespace App\Http\Repository\Implement;


use App\Http\Models\DistrictModel;
use App\Http\Repository\Contract\DistrictInterface;

/**
 * Class DistrictRepository
 * @package App\Http\Repository\Implement
 */
class DistrictRepository implements DistrictInterface
{
    /**
     * @var DistrictModel
     */
    protected $districtModel;

    /**
     * DistrictRepository constructor.
     */
    public function __construct()
    {
        $this->districtModel = new DistrictModel();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        $district = $this->districtModel
            ->select("id","city_id","district","slug","created_at","updated_at")
            ->with("city")
            ->get();

        return $district;
    }

    /**
     * @param $districtId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($districtId)
    {
        $district = $this->districtModel
            ->select("id","city_id","district","slug","created_at","updated_at")
            ->where("id", $districtId)
            ->with("city.province.country")
            ->first();

        return $district;
    }

    /**
     * @param $districtSlug
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findBySlug($districtSlug)
    {
        $district = $this->districtModel
            ->select("id","city_id","district","slug","created_at","updated_at")
            ->where("slug", "%".$districtSlug."%")
            ->get();

        return $district;
    }

    /**
     * @param $cityId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findByCityId($cityId)
    {
        $district = $this->districtModel
            ->select("id","city_id","district","slug","created_at","updated_at")
            ->where("city_id", $cityId)
            ->get();

        return $district;
    }

    /**
     * @param DistrictModel $districtModel
     * @return mixed
     */
    public function save(DistrictModel $districtModel)
    {
        $districtModel->save();
        return $districtModel->id;
    }

    /**
     * @param DistrictModel $districtModel
     * @param $districtId
     * @return mixed
     */
    public function update(DistrictModel $districtModel, $districtId)
    {
        $districtModel->where("id", $districtId);
        $districtModel->save();
        return $districtModel->id;
    }

    /**
     * @param $districtId
     * @return int
     */
    public function delete($districtId)
    {
        $this->districtModel = $this->findById($districtId);
        $this->districtModel->delete();

        return 1;
    }


}