@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>District <small>List</small></h1>
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('admin.district.delete.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="districtId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($districtData->id) }}"/>
                    <p>Apakah anda yakin akan menghapus data district dengan nama <b>{{ $districtData->district }}</b></p>
                    <div class="form-group">
                        <button class="btn btn-primary">Yes</button>
                        <a href="{{ route('admin.district') }}" class="btn btn-warning">No</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection