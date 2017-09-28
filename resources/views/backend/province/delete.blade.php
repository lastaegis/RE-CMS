@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>Province <small>Delete Form</small></h1>
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('admin.province.delete.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="provinceId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($provinceData->id) }}"/>
                    <p>Apakah anda yakin untuk menghapus data provinsi dengan nama <b>{{ $provinceData->province }}</b></p>
                    <div class="form-group">
                        <button class="btn btn-danger">Submit</button>
                        <a href="{{ route('admin.province') }}" class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection