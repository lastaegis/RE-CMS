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
                <form action="{{ route('admin.city.create.submit') }}" method="post">
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
                        <input type="text" name="city" class="form-control" placeholder="City"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection