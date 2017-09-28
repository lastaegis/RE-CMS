<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/21/17
 * Time: 15:52
 */

namespace App\Http\Repository\Implement;


use App\Http\Models\ProvinceModel;
use App\Http\Repository\Contract\ProvinceInterface;

/**
 * Class ProvinceRepository
 * @package App\Http\Repository\Implement
 */
class ProvinceRepository implements ProvinceInterface
{
    /**
     * @var ProvinceModel
     */
    protected $provinceModel;

    /**
     * ProvinceRepository constructor.
     */
    public function __construct()
    {
        $this->provinceModel = new ProvinceModel();
    }

    /**
     * @inheritdoc
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        $province = $this->provinceModel
            ->select("id","country_id","province","slug","created_at","updated_at")
            ->with("country")
            ->get();

        return $province;
    }

    /**
     * @inheritdoc
     * @param $provinceId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($provinceId)
    {
        $province = $this->provinceModel
            ->select("id","country_id","province","slug","created_at","updated_at")
            ->where("id", $provinceId)
            ->first();

        return $province;
    }

    /**
     * @inheritdoc
     * @param $provinceSlug
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findBySlug($provinceSlug)
    {
        $province = $this->provinceModel
            ->select("id","country_id","province","slug","created_at","updated_at")
            ->where("slug", "like", "%".$provinceSlug."%")
            ->get();

        return $province;
    }

    /**
     * @param $countryId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findByCountry($countryId)
    {
        $province = $this->provinceModel
            ->select("id","province","slug","created_at","updated_at")
            ->where("country_id", $countryId)
            ->get();

        return $province;
    }

    /**
     * @param ProvinceModel $provinceModel
     * @return bool
     */
    public function save(ProvinceModel $provinceModel)
    {
        $result = $provinceModel->save();
        return $result;
    }

    /**
     * @inheritdoc
     * @param ProvinceModel $provinceModel
     * @param $provinceId
     * @return bool
     */
    public function update(ProvinceModel $provinceModel, $provinceId)
    {
        $provinceModel->where("id", $provinceId);
        return $provinceModel->save();
    }

    /**
     * @param $provinceId
     * @return int
     */
    public function delete($provinceId)
    {
        $this->provinceModel    = $this->findById($provinceId);
        $this->provinceModel->delete();
        return 1;
    }

}