<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/28/17
 * Time: 20:00
 */

namespace App\Http\Repository\Implement;


use App\Http\Models\FileModel;
use App\Http\Repository\Contract\FileInterface;

/**
 * Class FileRepository
 * @package App\Http\Repository\Implement
 */
class FileRepository implements FileInterface
{
    /**
     * @var FileModel
     */
    protected $fileModel;
    /**
     * FileRepository constructor.
     */
    public function __construct()
    {
        $this->fileModel = new FileModel();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        $file = $this->fileModel
            ->select("id","file","path","mime","description")
            ->get();

        return $file;
    }

    /**
     * @param $fileId
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findById($fileId)
    {
        $file = $this->fileModel
            ->select("id","file","path","mime","description")
            ->where("id", $fileId)
            ->first();

        return $file;
    }

    /**
     * @param FileModel $fileModel
     * @return mixed
     */
    public function save(FileModel $fileModel)
    {
        $fileModel->save();
        return $fileModel->id;
    }

    /**
     * @param FileModel $fileModel
     * @param $fileId
     * @return mixed
     */
    public function update(FileModel $fileModel, $fileId)
    {
        $fileModel->where("id", $fileId);
        $fileModel->save();
        return $fileModel->id;
    }

    /**
     * @param $fileId
     */
    public function delete($fileId)
    {
        // TODO: Implement delete() method.
    }
}