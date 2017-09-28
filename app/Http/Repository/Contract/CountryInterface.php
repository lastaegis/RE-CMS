<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/16/17
 * Time: 14:10
 */
namespace App\Http\Repository\Contract;

use App\Http\Models\CountryModel;

interface CountryInterface
{
    /**
     * Used to find all country data
     * @return mixed
     */
    public function findAll();

    /**
     * Use to find country data base by country id
     * @param $countryId
     * @return mixed
     */
    public function findById($countryId);

    /**
     * Used to find country data based by slug
     * @param $countrySlug
     * @return mixed
     */
    public function findBySlug($countrySlug);

    /**
     * Used to create new country record
     * @param CountryModel $countryModel
     * @return mixed
     */
    public function save(CountryModel $countryModel);

    /**
     * Used to update country record
     * @param CountryModel $countryModel
     * @param $countryId
     * @return mixed
     */
    public function update(CountryModel $countryModel, $countryId);

    /**
     * @param $coutryId
     * @return mixed
     */
    public function delete($coutryId);
}