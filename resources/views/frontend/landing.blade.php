@extends("frontend.core.frontend-layout")
@section("menu")
    @include("frontend.core.menu")
@endsection
@section("content")
<div class="ui container">
    <div class="ui stackable centered grid">
        @foreach($cafeList as $cafe)
            <div class="sixteen wide column">
                <div class="ui special cards">
                    <div class="card fluid">
                        <div class="content">
                            <div class="right floated meta">14h</div>
                            <b>{{ $cafe->name }}</b>
                        </div>
                        <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                    <div class="center">
                                        <div class="ui inverted button read-more" cafe-id="{{ \Illuminate\Support\Facades\Crypt::encryptString($cafe->id) }}">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ URL::asset("storage/app/".$cafe->thumbnail[0]->detail->path) }}">
                        </div>
                        <div class="content">
                            <span class="right floated">
                              <i class="heart outline like icon"></i>
                              Open Hour
                            </span>
                            <i class="comment icon"></i>
                            Price Range
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="ui fullscreen modal" id="modal-post-descriptions">
    <i class="close icon"></i>
    <div class="image scrolling content no-padding">
        <div class="ui large image">
            <img id="image" src="https://semantic-ui.com/images/wireframe/image.png">
        </div>
        <div class="description">
            <div class="ui header">Description</div>
            <div id="description">This is an example of expanded content that will cause the modal's dimmer to scroll</div>
            <div class="ui divider"></div>
            <a href="#" class="ui blue button" id="full-post">Read More</a>
        </div>
    </div>
</div>
@endsection