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
                <form action="{{ route('admin.district.create.submit') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Country</label>
                        <select name="countryId" id="select-country" class="form-control">
                            <option value="">--- Select Country ---</option>
                            @foreach($countryList as $country)
                                <option value="{{ $country->id }}">{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <select name="provinceId" id="select-province" class="form-control">
                            <option value="">--- Select Province ---</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <select name="cityId" id="select-city" class="form-control">
                            <option value="">--- Select City ---</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <input type="text" name="district" class="form-control" placeholder="District"/>
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