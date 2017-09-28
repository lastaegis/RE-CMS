@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>Province <small>List</small></h1>
    </div>
    <div class="content">
        @if(\Illuminate\Support\Facades\Session::has('success_message'))
            <div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ \Illuminate\Support\Facades\Session::get('success_message') }}
            </div>
        @endif
        <div class="box">
            <div class="col-md-12 text-right equal-top-bottom-margin">
                <a href="{{ route('admin.province.create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add Province</a>
            </div>
            <div class="box-body">
                <table class="table table-responsive table-bordered" id="province-table">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Country</th>
                            <th>Province</th>
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