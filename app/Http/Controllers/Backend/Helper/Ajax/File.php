<?php

namespace App\Http\Controllers\Backend\Helper\Ajax;

use App\Http\Models\FileModel;
use App\Http\Repository\Implement\FileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class File extends Controller
{
    protected $fileModel;
    protected $fileRepository;
    public function __construct()
    {
        $this->fileModel        = new FileModel();
        $this->fileRepository   = new FileRepository();
    }

    /**
     * Use to get file detail
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getDetailFile(Request $request)
    {
        $file = $this->fileRepository->findById($request->id);
        return response()->json($file);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $this->fileModel        = $this->fileRepository->findById($request->id);
        $this->fileModel->file  = $request->title;
        $result = $this->fileRepository->save($this->fileModel);
        if($result)
        {
            $dataResponse = array(
                "status_code"   => 200,
                "status_message"=> "File name change success"
            );
            return response()->json($dataResponse);
        }
    }
}
