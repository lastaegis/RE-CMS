<?php

namespace App\Http\Controllers\Backend\File;

use App\Http\Models\FileModel;
use App\Http\Repository\Implement\FileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Read extends Controller
{
    protected $fileRepository;
    protected $fileModel;
    public function __construct()
    {
        $this->fileRepository   = new FileRepository();
        $this->fileModel        = new FileModel();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        $data["fileList"] = $this->fileRepository->findAll();
        return view("backend.file.index", $data);
    }
}
