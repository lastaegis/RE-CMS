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
                <form action="{{ route('admin.district.update.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="districtId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($districtData->id) }}"/>
                    <div class="form-group">
                        <label>Country</label>
                        <select name="countryId" id="select-country" class="form-control">
                            <option value="">--- Select Country ---</option>
                            @foreach($countryList as $country)
                                <option value="{{ $country->id }}" @if($country->id === $districtData->city->province->country_id) selected @endif>{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <select name="provinceId" id="select-province" class="form-control">
                            <option value="">--- Select Province ---</option>
                            @foreach($provinceList as $province)
                                <option value="{{ $province->id }}" @if($province->id === $districtData->city->province_id) selected @endif>{{ $province->province }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <select name="cityId" id="select-city" class="form-control">
                            <option value="">--- Select City ---</option>
                            @foreach($cityList as $city)
                                <option value="{{ $city->id }}" @if($city->id === $districtData->city_id) selected @endif>{{ $city->city }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <input type="text" name="district" class="form-control" value="{{ $districtData->district }}" placeholder="District"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.district') }}" class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection