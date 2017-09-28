<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/16/17
 * Time: 19:20
 */

namespace App\Http\Repository\Contract;


use App\Http\Models\CityModel;

/**
 * Interface CityInterface
 * @package App\Http\Repository\Contract
 */
interface CityInterface
{
    /**
     * Used to find all data city
     * @return mixed
     */
    public function findAll();

    /**
     * @param $cityId
     * @return mixed
     */
    public function findById($cityId);

    /**
     * Used to find all data city base by slug
     * @param $citySlug
     * @return mixed
     */
    public function findBySlug($citySlug);

    /**
     * Used to find all data province base by province id
     * @param $provinceId
     * @return mixed
     */
    public function findByProvinceId($provinceId);

    /**
     * @param CityModel $cityModel
     * @return mixed
     */
    public function save(CityModel $cityModel);

    /**
     * @param CityModel $cityModel
     * @param $cityId
     * @return mixed
     */
    public function update(CityModel $cityModel, $cityId);

    /**
     * @param $cityId
     * @return mixed
     */
    public function delete($cityId);
}