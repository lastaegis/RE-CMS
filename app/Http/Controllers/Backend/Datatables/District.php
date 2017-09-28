<?php

namespace App\Http\Controllers\Backend\Datatables;

use App\Http\Repository\Implement\DistrictRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

/**
 * Class District
 * @package App\Http\Controllers\Backend\Datatables
 */
class District extends Controller
{
    /**
     * @var DistrictRepository
     */
    protected $districtRepository;

    /**
     * District constructor.
     */
    public function __construct()
    {
        $this->districtRepository = new DistrictRepository();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function defaultDatatables(Request $request)
    {
        $district   = $this->districtRepository->findAll();
        $dataTables = Datatables::of($district)
            ->addColumn('action', function ($district) {
                $param = array(
                    'districtId'    => $district->id
                );
                return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a> '.
                    '<a href="'.route('admin.district.update', $param).'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Update</a> '.
                    '<a href="'.route('admin.district.delete', $param).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->make(true);
        return $dataTables;
    }
}
