<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/26/17
 * Time: 20:49
 */

namespace App\Http\Repository\Contract;


use App\Http\Models\CafeModel;

/**
 * Interface CafeInterface
 * @package App\Http\Repository\Contract
 */
interface CafeInterface
{
    /**
     * @return mixed
     */
    public function findAll();

    /**
     * @return mixed
     */
    public function findActiveCafe();

    /**
     * @param $cafeId
     * @return mixed
     */
    public function findById($cafeId);

    /**
     * @param CafeModel $model
     * @return mixed
     */
    public function save(CafeModel $model);

    /**
     * @param CafeModel $model
     * @param $cafeId
     * @return mixed
     */
    public function update(CafeModel $model, $cafeId);

    /**
     * @param $cafeId
     * @return mixed
     */
    public function delete($cafeId);
}