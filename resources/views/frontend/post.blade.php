@extends("frontend.core.frontend-layout")
@section("menu")
    @include("frontend.core.menu")
@endsection()
@section("content")
<div class="ui container">
    <div class="ui stackable grid">
        <div class="row">
            <div class="six wide column">
                <img class="ui fluid image" src="https://semantic-ui.com/images/wireframe/image.png">
            </div>
            <div class="ten wide column">
                <div class="ui piled segment">
                    <h4 class="ui header">{{ $cafeData->name }}</h4>
                    <p>
                        <i class="location arrow icon"></i>
                        <a href="{{ $cafeData->maps }}"> {{ $cafeData->address }}</a>
                    </p>
                    <p>
                        <i class="hourglass full icon"></i> {{ $cafeData->open_hour }} - {{ $cafeData->close_hour }}
                    </p>
                    <p>
                        <i class="money icon"></i> Rp. {{ number_format($cafeData->start_price,0,".",".") }} - Rp. {{ number_format($cafeData->end_price,0,".",".") }}
                    </p>
                    <p><b>Descriptions: </b></p>
                    {!! $cafeData->notes !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <div class="ui segment">
                    <iframe src="{{ $cafeData->maps }}" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
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
    </div>
</div>
@endsection