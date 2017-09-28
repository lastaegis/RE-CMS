<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/28/17
 * Time: 19:57
 */

namespace App\Http\Repository\Contract;


use App\Http\Models\FileModel;

interface FileInterface
{
    public function findAll();

    public function findById($fileId);

    public function save(FileModel $fileModel);

    public function update(FileModel $fileModel, $fileId);

    public function delete($fileId);
}