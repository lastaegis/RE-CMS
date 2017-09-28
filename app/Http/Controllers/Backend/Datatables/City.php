<?php

namespace App\Http\Controllers\Backend\Datatables;

use App\Http\Repository\Implement\CityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Facades\Datatables;

class City extends Controller
{
    protected $cityRepository;
    public function __construct()
    {
        $this->cityRepository = new CityRepository();
    }

    public function defaultDatatables(Request $request)
    {
        $city       = $this->cityRepository->findAll();
        $datatables = Datatables::of($city)
            ->addColumn('action',function($city){
                $param = array(
                    'cityId' => $city->id
                );

                return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a> '.
                '<a href="'.route('admin.city.update', $param).'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Update</a> '.
                '<a href="'.route('admin.city.delete', $param).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
            ->make(true);

        return $datatables;
    }
}
