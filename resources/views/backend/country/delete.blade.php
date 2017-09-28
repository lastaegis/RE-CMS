@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        Delete Country
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <p>Apakah anda yakin untuk menghapus data country dengan nama <b>{{ $countryData->country }}</b>?</p>
                <form action="{{ URL('admin/country/form-delete/submit') }}" method="post">
                    {!! csrf_field(); !!}
                    <input type="hidden" name="countryId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($countryData->id) }}"/>
                    <div class="form-group">
                        <button class="btn btn-primary">Delete</button>
                        <a href="{{ URL('admin/country') }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection