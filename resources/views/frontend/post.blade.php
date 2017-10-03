@extends("frontend.core.frontend-layout")
@section("menu")
    @include("frontend.core.menu")
@endsection()
@section("content")
    <div class="ui container post">
        <div class="ui stackable grid">
            <div class="sixteen wide column grid center aligned">
                <h1>{{ $cafeData->name }}</h1>
            </div>
            <div class="sixteen wide column">
                <div class="row">
                    <img class="ui fluid image" src="{{ URL::asset("storage/app/".$cafeData->thumbnail[0]->detail->path) }}">
                </div>
                <div class="row story">
                    {!! $cafeData->notes !!}
                    <p><i class="map icon"></i> <a href="{{ $cafeData->maps }}"> {{ $cafeData->address }}</a></p>
                    <p><i class="money icon"></i> Rp. {{ number_format($cafeData->start_price,0,".",".") }} - Rp. {{ number_format($cafeData->end_price,0,".",".") }}</p>
                    <p><i class="hourglass full icon"></i> {{ date('h:i', strtotime($cafeData->open_hour)) }} - {{ date('h:i', strtotime($cafeData->close_hour)) }}</p>
                </div>
            </div>
            <div class="sixteen wide column grid center aligned">
                <h4>{{ $cafeData->name }} Image</h4>
            </div>
            <div class="row" id="light-gallery">
                @foreach($cafeData->gallery as $gallery)
                    <div class="four wide column" style="padding-bottom: 5%;">
                        <div class="pictures" data-src="{{ URL::asset('storage/app/'.$gallery->detail->path) }}">
                            <img class="ui fluid image" src="{{ URL::asset('storage/app/'.$gallery->detail->path) }}">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="sixteen wide column grid center aligned">
                <h4>{{ $cafeData->name }} Maps</h4>
            </div>
            <div class="row">
                <iframe src="{{ $cafeData->maps }}" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection