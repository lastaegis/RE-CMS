@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>City <small>Create Form</small></h1>
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('admin.city.delete.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="cityId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($cityData->id) }}"/>
                    <p>Apakah anda yakin untuk menghapus data kota dengan nama <b>{{ $cityData->city }}</b></p>
                    <div class="form-group">
                        <button class="btn btn-danger">Yes</button>
                        <a href="{{ route('admin.city') }}" class="btn btn-warning">No</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection