@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>City <small>List</small></h1>
    </div>
    <div class="content">
        @if(\Illuminate\Support\Facades\Session::has('success_message'))
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ \Illuminate\Support\Facades\Session::get('success_message') }}
            </div>
        @endif
        <div class="box">
            <div class="box-body">
                <div class="col-md-12 text-right">
                    <a href="{{ route('admin.city.create') }}" class="btn btn-primary equal-top-bottom-margin">
                        <i class="glyphicon glyphicon-plus"></i>
                        Add New City
                    </a>
                </div>
                <table class="table table-responsive table-borderd" id="city-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Province</th>
                            <th>City</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection