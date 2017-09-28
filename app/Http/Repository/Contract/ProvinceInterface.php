<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/16/17
 * Time: 14:41
 */

namespace App\Http\Repository\Contract;


use App\Http\Models\ProvinceModel;

interface ProvinceInterface
{
    /**
     * Used to get find all data province
     * @return mixed
     */
    public function findAll();

    /**
     * Use to find province record by province id
     * @param $provinceId
     * @return mixed
     */
    public function findById($provinceId);

    /**
     * Used to find province data based by province slug
     * @param $provinceSlug
     * @return mixed
     */
    public function findBySlug($provinceSlug);

    /**
     * Used to find province data based by country id
     * @param $countryId
     * @return mixed
     */
    public function findByCountry($countryId);

    /**
     * Use to create new province record
     * @param ProvinceModel $provinceModel
     * @return mixed
     */
    public function save(ProvinceModel $provinceModel);

    /**
     * Use to update province record
     * @param ProvinceModel $provinceModel
     * @param $provinceId
     * @return mixed
     */
    public function update(ProvinceModel $provinceModel, $provinceId);

    /**
     * Use to delete province record
     * @param $provinceId
     * @return mixed
     */
    public function delete($provinceId);
}