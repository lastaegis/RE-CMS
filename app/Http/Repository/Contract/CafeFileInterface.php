<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/28/17
 * Time: 22:09
 */

namespace App\Http\Repository\Contract;


use App\Http\Models\CafeFileModel;

/**
 * Interface CafeFileInterface
 * @package App\Http\Repository\Contract
 */
interface CafeFileInterface
{
    /**
     * @param $cafeFileId
     * @return mixed
     */
    public function findById($cafeFileId);

    /**
     * @param $cafeId
     * @return mixed
     */
    public function findGalleryByCafeId($cafeId);

    /**
     * @param $cafeId
     * @return mixed
     */
    public function findThumbnailByCafeId($cafeId);

    /**
     * @param CafeFileModel $cafeFileModel
     * @return mixed
     */
    public function save(CafeFileModel $cafeFileModel);

    /**
     * @param CafeFileModel $cafeFileModel
     * @param $cafeFileId
     * @return mixed
     */
    public function update(CafeFileModel $cafeFileModel, $cafeId, $fileId);

    /**
     * @param $cafeId
     * @param $fileId
     * @return mixed
     */
    public function delete($cafeId, $fileId);
}