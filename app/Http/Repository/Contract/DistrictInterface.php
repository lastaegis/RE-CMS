<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/16/17
 * Time: 19:23
 */

namespace App\Http\Repository\Contract;

use App\Http\Models\DistrictModel;

/**
 * Interface DistrictInterface
 * @package App\Http\Repository\Contract
 */
interface DistrictInterface
{
    /**
     * Used to find all data district
     * @return mixed
     */
    public function findAll();

    /**
     * @param $districtId
     * @return mixed
     */
    public function findById($districtId);

    /**
     * Used to find data district base by slug
     * @param $districtSlug
     * @return mixed
     */
    public function findBySlug($districtSlug);

    /**
     * Used to find data district base by city id
     * @param $cityId
     * @return mixed
     */
    public function findByCityId($cityId);

    /**
     * @param DistrictModel $districtModel
     * @return mixed
     */
    public function save(DistrictModel $districtModel);

    /**
     * @param DistrictModel $districtModel
     * @param $districtId
     * @return mixed
     */
    public function update(DistrictModel $districtModel, $districtId);

    /**
     * @param $districtId
     * @return mixed
     */
    public function delete($districtId);
}