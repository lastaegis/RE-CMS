<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/28/17
 * Time: 22:11
 */

namespace App\Http\Repository\Implement;


use App\Http\Models\CafeFileModel;
use App\Http\Repository\Contract\CafeFileInterface;

/**
 * Class CafeFileRepository
 * @package App\Http\Repository\Implement
 */
class CafeFileRepository implements CafeFileInterface
{
    /**
     * @var CafeFileModel
     */
    protected $cafeFileModel;
    /**
     * CafeFileRepository constructor.
     */
    public function __construct()
    {
        $this->cafeFileModel = new CafeFileModel();
    }

    /**
     * @param $cafeFileId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($cafeFileId)
    {
        $cafeFile = $this->cafeFileModel
            ->select("id")
            ->where("id", $cafeFileId)
            ->first();

        return $cafeFile;
    }

    /**
     * @param $cafeId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findGalleryByCafeId($cafeId)
    {
        $cafeFile = $this->cafeFileModel
            ->select("id","cafe_id","file_id")
            ->where("cafe_id", $cafeId)
            ->where("type","=","gallery")
            ->get();

        return $cafeFile;
    }

    /**
     * @param $cafeId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findThumbnailByCafeId($cafeId)
    {
        $cafeFile = $this->cafeFileModel
            ->select("id","cafe_id","file_id")
            ->where("cafe_id", $cafeId)
            ->where("type","=","thumbnail")
            ->first();

        return $cafeFile;
    }


    /**
     * @param CafeFileModel $cafeFileModel
     * @return mixed
     */
    public function save(CafeFileModel $cafeFileModel)
    {
        $cafeFileModel->save();
        return $cafeFileModel->id;
    }

    /**
     * @param CafeFileModel $cafeFileModel
     * @param $cafeId
     * @param $fileId
     * @return mixed
     */
    public function update(CafeFileModel $cafeFileModel, $cafeId, $fileId)
    {
        $cafeFileModel->where("cafe_id", $cafeId)->where("file_id", $fileId);
        $cafeFileModel->save();
        return $cafeFileModel->id;
    }

    /**
     * @param $cafeId
     * @param $fileId
     * @return int
     */
    public function delete($fileId, $cafeId)
    {
        $data = $this->cafeFileModel->where("cafe_id", $cafeId)->where("file_id",$fileId)->first();
        $data->delete();
        return 1;
    }
}