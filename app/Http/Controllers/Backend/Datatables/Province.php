<?php

namespace App\Http\Controllers\Backend\Datatables;

use App\Http\Repository\Implement\ProvinceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Yajra\Datatables\Datatables;

class Province extends Controller
{
    protected $provinceRepository;
    public function __construct()
    {
        $this->provinceRepository = new ProvinceRepository();
    }

    /**
     * Use to create datatable default format
     * @return mixed
     */
    public function defaultDatatables()
    {
        $province   = $this->provinceRepository->findAll();
        $dataTables = Datatables::of($province)
            ->addColumn('action', function ($province) {
                $param = array(
                    'provinceId'    => $province->id
                );
                return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a> '.
                    '<a href="'.route('admin.province.update', $param).'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Update</a> '.
                    '<a href="'.route('admin.province.delete', $param).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->make(true);
        return $dataTables;
    }
}
