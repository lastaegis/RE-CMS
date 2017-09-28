@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        Update Country
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ URL('admin/country/form-update/submit') }}" method="post">
                    {!! csrf_field(); !!}
                    <input type="hidden" name="countryId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($countryData->id) }}"/>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country" class="form-control" value="{{ $countryData->country }}"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                        <a href="{{ URL('admin/country') }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection