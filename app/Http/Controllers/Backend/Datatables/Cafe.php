<?php

namespace App\Http\Controllers\Backend\Datatables;

use App\Http\Repository\Implement\CafeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

/**
 * Class Cafe
 * @package App\Http\Controllers\Backend\Datatables
 */
class Cafe extends Controller
{
    /**
     * @var CafeRepository
     */
    protected $cafeRepository;

    /**
     * Cafe constructor.
     */
    public function __construct()
    {
        $this->cafeRepository = new CafeRepository();
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function defaultDatatables(Request $request)
    {
        $cafe       = $this->cafeRepository->findAll();
        $datatables = Datatables::of($cafe)
            ->addColumn('action',function($cafe){
                $param = array(
                    'cafeId' => $cafe->id
                );

                return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a> '.
                    '<a href="'.route('admin.cafe.update', $param).'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Update</a> '.
                    '<a href="'.route('admin.cafe.delete', $param).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->make(true);

        return $datatables;
    }
}
