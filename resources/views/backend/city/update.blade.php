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
                <form action="{{ route('admin.city.update.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="cityId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($cityData->id) }}"/>
                    <div class="form-group">
                        <label>Country</label>
                        <select name="countryId" id="select-country" class="form-control">
                            <option value="">--- Select Country ---</option>
                            @foreach($countryList as $country)
                                <option value="{{ $country->id }}" @if($country->id === $cityData->province->country_id) selected @endif >{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <select name="provinceId" id="select-province" class="form-control">
                            <option value="">--- Select Province ---</option>
                            @foreach($provinceList as $province)
                                <option value="{{ $province->id }}" @if($province->id === $cityData->province_id) selected @endif>{{ $province->province }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" value="{{ $cityData->city }}" placeholder="City"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection