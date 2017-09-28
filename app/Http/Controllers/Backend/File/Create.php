<?php

namespace App\Http\Controllers\Backend\File;

use App\Http\Models\FileModel;
use App\Http\Repository\Implement\FileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Create extends Controller
{
    protected $fileModel;
    protected $fileRepository;
    public function __construct()
    {
        $this->fileModel        = new FileModel();
        $this->fileRepository   = new FileRepository();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view()
    {
        return view("backend.file.create");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        //Get original data
        $originalFileName   = $request->file('file')->getClientOriginalName();
        $mime               = $request->file('file')->getClientMimeType();

        //Upload Process
        $path               = Storage::putFileAs('cafe', $request->file('file'), $originalFileName);

        //Create New Record
        $this->fileModel->file          = $originalFileName;
        $this->fileModel->path          = $path;
        $this->fileModel->description   = "";
        $this->fileModel->mime          = $mime;
        $this->fileRepository->save($this->fileModel);
        return response()->json($path);
    }
}
