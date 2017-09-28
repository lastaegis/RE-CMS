<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/16/17
 * Time: 14:13
 */

namespace App\Http\Repository\Implement;

use App\Http\Models\CountryModel;
use App\Http\Repository\Contract\CountryInterface;

class CountryRepository implements CountryInterface
{
    protected $countryModels;
    public function __construct()
    {
        $this->countryModels = new CountryModel();
    }

    /**
     * {@inheritdoc}
     * @return mixed
     */
    public function findAll()
    {
        $country = $this->countryModels
            ->select('id','country','slug','created_at','updated_at')
            ->get();

        return $country;
    }

    /**
     * @param $countryId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($countryId)
    {
        $country = $this->countryModels
            ->select("id", "country", "slug", "created_at", "updated_at")
            ->where("id", $countryId)
            ->first();

        return $country;
    }


    /**
     * @inheritdoc
     * @param $countrySlug
     * @return mixed
     */
    public function findBySlug($countrySlug)
    {
        return $this->countryModels
            ->select('id','country')
            ->where('slug','like', '%'.$countrySlug.'%')
            ->get();
    }

    /**
     * @inheritdoc
     * @param CountryModel $countryModel
     * @return mixed
     */
    public function save(CountryModel $countryModel)
    {
        $countryModel->save();
        return (int)$countryModel->id;
    }

    /**
     * @inheritdoc
     * @param CountryModel $countryModel
     * @param $countryId
     * @return mixed
     */
    public function update(CountryModel $countryModel, $countryId)
    {
        $countryModel->where('id',$countryId);
        $countryModel->save();
        return $countryModel->id;
    }

    /**
     * @inheritdoc
     * @param $countryId
     * @return bool|null
     */
    public function delete($countryId)
    {
        $result = $this->countryModels->where("id", $countryId)->first();
        if($result->delete())
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }


}