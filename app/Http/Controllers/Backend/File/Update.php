<?php

namespace App\Http\Controllers\Backend\File;

use App\Http\Models\FileModels;
use App\Http\Repository\Implement\FileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Update extends Controller
{
    protected $fileRepository;
    protected $fileModel;
    public function __construct()
    {
        $this->fileModel        = new FileModels();
        $this->fileRepository   = new FileRepository();
    }
}
