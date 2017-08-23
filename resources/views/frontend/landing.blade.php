@include("frontend.core.header")
@include("frontend.core.menu")
<div class="ui container">
    <div class="ui stackable grid">
        @for($i = 0; $i < 3; $i++)
        <div class="row">
            @for($j = 0; $j < 4; $j++)
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
                                        <div class="ui inverted button read-more">Read More</div>
                                    </div>
                                </div>
                            </div>
                            <img src="https://semantic-ui.com/images/wireframe/image.png">
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
            @endfor
        </div>
        @endfor
    </div>
</div>
<div class="ui modal" id="modal-post-descriptions">
    <i class="close icon"></i>
    <div class="header">
        FOOD
    </div>
    <div class="image scrolling content">
        <div class="ui medium image">
            <img src="https://semantic-ui.com/images/wireframe/image.png">
        </div>
        <div class="description">
            <div class="ui header">Description</div>
            <p>This is an example of expanded content that will cause the modal's dimmer to scroll</p>
            <img class="ui wireframe image" src="https://semantic-ui.com/images/wireframe/paragraph.png">
        </div>
    </div>
    <div class="actions">
        <div class="ui red button close-button">Close</div>
        <div class="ui blue button">Read More</div>
    </div>
</div>
@include("frontend.core.footer")