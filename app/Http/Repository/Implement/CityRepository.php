<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/28/17
 * Time: 01:49
 */

namespace App\Http\Repository\Implement;


use App\Http\Models\CityModel;
use App\Http\Repository\Contract\CityInterface;

/**
 * Class CityRepository
 * @package App\Http\Repository\Implement
 */
class CityRepository implements CityInterface
{
    /**
     * @var CityModel
     */
    protected $cityModel;

    /**
     * CityRepository constructor.
     */
    public function __construct()
    {
        $this->cityModel = new CityModel();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        $city = $this->cityModel
            ->select("id","province_id","city","slug","created_at","updated_at")
            ->with("province")
            ->get();

        return $city;
    }

    /**
     * @param $cityId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($cityId)
    {
        $city = $this->cityModel
            ->select("id","province_id","city","slug")
            ->where("id", $cityId)
            ->with("province.country")
            ->first();

        return $city;
    }

    /**
     * @param $citySlug
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findBySlug($citySlug)
    {
        $city = $this->cityModel
            ->select("id","province_id","city","slug")
            ->where("slug","%".$citySlug."%")
            ->first();

        return $city;
    }

    /**
     * @param $provinceId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findByProvinceId($provinceId)
    {
        $city = $this->cityModel
            ->select("id","province_id","city","slug")
            ->where("province_id", $provinceId)
            ->get();

        return $city;
    }

    /**
     * @param CityModel $cityModel
     * @return mixed
     */
    public function save(CityModel $cityModel)
    {
        $cityModel->save();
        return $cityModel->id;
    }

    /**
     * @param CityModel $cityModel
     * @param $cityId
     * @return mixed
     */
    public function update(CityModel $cityModel, $cityId)
    {
        $cityModel->where("id", $cityId);
        $cityModel->save();
        return $cityModel->id;
    }

    /**
     * @param $cityId
     * @return int
     */
    public function delete($cityId)
    {
        $this->cityModel = $this->findById($cityId);
        $this->cityModel->delete();
        return 1;
    }


}