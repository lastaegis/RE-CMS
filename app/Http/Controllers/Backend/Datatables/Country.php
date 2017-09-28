<?php

namespace App\Http\Controllers\Backend\Datatables;

use App\Http\Repository\Implement\CountryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Yajra\Datatables\Facades\Datatables;

class Country extends Controller
{
    protected $countryRepository;
    public function __construct()
    {
        $this->countryRepository = new CountryRepository();
    }

    /**
     * Use to get main datatables without any configuration
     */
    public function defaultDatatables(Request $request)
    {
        if($request->ajax())
        {
            $country    = $this->countryRepository->findAll();
            $dataTables = Datatables::of($country)
                ->addColumn('action', function ($country) {
                    $param = array(
                        'countryId' => $country->id
                    );
                    return '<a href="#" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a> '.
                        '<a href="'.route('admin.country.update', $param).'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Update</a> '.
                        '<a href="'.route('admin.country.delete', $param).'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                })
                ->make(true);
            return $dataTables;
        }
        else
        {
            return redirect("404");
        }
    }
}
