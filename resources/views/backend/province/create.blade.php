@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        Create New Province
    </div>
    <div class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ URL('admin/province/form-create/submit') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Country</label>
                        <select name="countryId" class="form-control">
                            <option value="">--- Select Country ---</option>
                            @foreach($countryList as $country)
                                <option value="{{ $country->id }}">{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <input type="text" name="province" class="form-control" placeholder="Province"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection