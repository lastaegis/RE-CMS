@extends("frontend.core.frontend-layout")
@section("menu")
    @include("frontend.core.menu")
@endsection
@section("content")
<div class="ui container">
    <div class="ui stackable grid">
        @foreach($cafeList as $cafe)
            <div class="four wide column">
                <div class="ui special cards">
                    <div class="card">
                        <div class="content">
                            <div class="right floated meta">14h</div>
                            <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/large/elliot.jpg"> Elliot
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
                              17 likes
                            </span>
                            <i class="comment icon"></i>
                            3 comments
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="ui modal" id="modal-post-descriptions">
    <i class="close icon"></i>
    <div class="header">
        FOOD
    </div>
    <div class="image scrolling content">
        <div class="ui medium image">
            <img id="image" src="https://semantic-ui.com/images/wireframe/image.png">
        </div>
        <div class="description">
            <div class="ui header">Description</div>
            <div id="description">This is an example of expanded content that will cause the modal's dimmer to scroll</div>
        </div>
    </div>
    <div class="actions">
        <div class="ui red button close-button">Close</div>
        <a href="#" class="ui blue button" id="full-post">Read More</a>
    </div>
</div>
@endsection