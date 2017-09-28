@extends("backend.core.backend-layout")
@section("menu")
    @include("backend.menu.admin")
@endsection
@section("content")
    <div class="content-header">
        <h1>Cafe <small>Create New</small></h1>
    </div>
    <div class="content">
        <form action="{{ route('admin.cafe.update.submit') }}" method="post">
            {!! csrf_field() !!}
            <input type="hidden" name="cafeId" value="{{ \Illuminate\Support\Facades\Crypt::encryptString($cafeData->id)}}"/>
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        Cafe Information
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Status Post</label>
                            <select name="status" class="form-control">
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Cafe Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $cafeData->name }}" placeholder="Cafe Name"/>
                        </div>
                        <div class="form-group">
                            <label>Start Price</label>
                            <input type="number" min="0" name="startPrice" class="form-control" value="{{ $cafeData->start_price }}" placeholder="Lowest Price"/>
                        </div>
                        <div class="form-group">
                            <label>End Price</label>
                            <input type="number" min="0" name="endPrice" class="form-control" value="{{ $cafeData->end_price }}" placeholder="Highest Price"/>
                        </div>
                        <div class="form-group">
                            <label>Open Hour</label>
                            <input type="time" name="openHour" value="{{ $cafeData->open_hour }}" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Close Hour</label>
                            <input type="time" name="closeHour" value="{{ $cafeData->close_hour }}" class="form-control"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        Cafe Description
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Notes</label>
                            <textarea class="form-control" name="notes" id="notes">
                                {!! $cafeData->notes !!}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        Cafe Location
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label>Country</label>
                            <select name="countryId" id="select-country" class="form-control">
                                <option value="">--- Select Country ---</option>
                                @foreach($countryList as $country)
                                    <option value="{{ $country->id }}" @if($country->id === $cafeData->district->city->province->country_id) selected @endif>{{ $country->country }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Province</label>
                            <select name="provinceId" id="select-province" class="form-control">
                                <option value="">--- Select Province ---</option>
                                @foreach($provinceList as $province)
                                    <option value="{{ $province->id }}"@if($province->id === $cafeData->district->city->province_id) selected @endif>{{ $province->province }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select name="cityId" id="select-city" class="form-control">
                                <option value="">--- Select City ---</option>
                                @foreach($cityList as $city)
                                    <option value="{{ $city->id }}" @if($city->id === $cafeData->district->city_id) selected @endif>{{ $city->city }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>District</label>
                            <select name="districtId" id="select-district" class="form-control">
                                <option value="">--- Select District ---</option>
                                @foreach($districtList as $district)
                                    <option value="{{ $district->id }}" @if($district->id === $cafeData->district_id) selected @endif>{{ $district->district }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Cafe Address</label>
                            <input type="text" name="address" class="form-control" value="{{ $cafeData->address }}" placeholder="Cafe Address"/>
                        </div>
                        <div class="form-group">
                            <label>Google Maps</label>
                            <input type="url" name="gmaps" class="form-control" value="{{ $cafeData->maps }}" placeholder="GMaps URL"/>
                            <span>Quick Link To <a href="https://www.google.co.id/maps">Google Maps</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        Cafe Media
                    </div>
                    <div class="box-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Slider</label>
                                <select name="slider[]" class="form-control select2" multiple>
                                    <option value="">--- Select Slider ---</option>
                                    @foreach($fileList as $file)
                                        <option value="{{ $file->id }}" @if(in_array($file->id, $selectedSlider)) selected @endif>{{ $file->file }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <select name="thumbnail" class="form-control select2">
                                    <option value="">--- Select Thumbnail ---</option>
                                    @foreach($fileList as $file)
                                        <option value="{{ $file->id }}" @if($file->id === $selectedThumbnail->file_id) selected @endif>{{ $file->file }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                            <a href="{{ route('admin.cafe') }}" class="btn btn-warning">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection