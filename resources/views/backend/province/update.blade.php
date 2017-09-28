@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>Province <small>Update Form</small></h1>
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('admin.province.update.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="provinceId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($provinceData->id) }}"/>
                    <div class="form-group">
                        <label>Country</label>
                        <select name="countryId" class="form-control">
                            <option value="">--- Select Country ---</option>
                            @foreach($countryList as $country)
                                <option value="{{ $country->id }}" @if($country->id === $provinceData->country_id) selected @endif >{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <input type="text" name="province" class="form-control" placeholder="Province" value="{{ $provinceData->province }}"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection