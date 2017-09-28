<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/26/17
 * Time: 20:57
 */

namespace App\Http\Repository\Implement;


use App\Http\Models\CafeModel;
use App\Http\Repository\Contract\CafeInterface;

/**
 * Class CafeRepository
 * @package App\Http\Repository\Implement
 */
class CafeRepository implements CafeInterface
{
    /**
     * @var CafeModel
     */
    protected $cafeModel;

    /**
     * CafeRepository constructor.
     */
    public function __construct()
    {
        $this->cafeModel = new CafeModel();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        $cafe = $this->cafeModel
            ->select("id","name","address","status","created_at","updated_at")
            ->get();

        return $cafe;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findActiveCafe()
    {
        $cafe = $this->cafeModel
            ->select("id","name","address","status","created_at","updated_at")
            ->where("status","=","publish")
            ->with("thumbnail.detail")
            ->get();

        return $cafe;
    }

    /**
     * @param $cafeId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($cafeId)
    {
        $cafe = $this->cafeModel
            ->select("id","district_id","name","address","maps","start_price","end_price","open_hour","close_hour","notes","status")
            ->where("id", $cafeId)
            ->with("district.city.province.country","media.detail","thumbnail.detail","gallery.detail")
            ->first();

        return $cafe;
    }

    /**
     * @param CafeModel $cafeModel
     * @return mixed
     */
    public function save(CafeModel $cafeModel)
    {
        $cafeModel->save();
        return $cafeModel->id;
    }

    /**
     * @param CafeModel $cafeModel
     * @param $cafeId
     * @return mixed
     */
    public function update(CafeModel $cafeModel, $cafeId)
    {
        $cafeModel->where("id", $cafeId);
        $cafeModel->save();
        return $cafeModel->id;
    }

    /**
     * @param $cafeId
     * @return int
     */
    public function delete($cafeId)
    {
        $this->cafeModel    = $this->findById($cafeId);
        $this->cafeModel->delete();
        if($this->cafeModel->trashed())
        {
            return 1;
        }
    }


}