@include("core.header")
<style type="text/css">
    body > .grid {
        height: 100%;
    }
    .image {
        margin-top: -100px;
    }
    .column {
        max-width: 450px;
    }
</style>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <img src="#" class="image">
            <div class="content">
                Log-in to your account
            </div>
        </h2>
        <form action="#" method="POST" class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="E-mail address">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="ui fluid large teal submit button">Login</div>
            </div>
            <div class="ui error message"></div>
        </form>
        <div class="ui message">
            Forget Your Password? <a href="#">Reset Here</a>
        </div>
    </div>
</div>
@include("core.footer")