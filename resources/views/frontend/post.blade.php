@include("frontend.core.header")
@include("frontend.core.menu")
<div class="ui container">
    <div class="ui stackable grid">
        <div class="row">
            <div class="six wide column">
                <img class="ui fluid image" src="https://semantic-ui.com/images/wireframe/image.png">
            </div>
            <div class="ten wide column">
                <div class="ui piled segment">
                    <h4 class="ui header">Nama Tempat Makan</h4>
                    <p>
                        <i class="location arrow icon"></i>
                        <a href="https://www.google.co.id/maps/dir/''/''/data=!4m5!4m4!1m0!1m2!1m1!1s0x2dd7fa5be8fdbc79:0xd8af3455d3857a9e?sa=X&ved=0ahUKEwjlzMabve3VAhUCULwKHbs5A-kQ9RcICjAA"> Semolowaru Indah II</a>
                    </p>
                    <p>
                        <i class="hourglass full icon"></i> 09:00 - 22:00
                    </p>
                    <p>
                        <i class="money icon"></i> Rp. 20.000 - Rp. 90.000
                    </p>
                    <p><b>Descriptions: </b></p>
                    <p>Udah mau waktu berbuka nih gaes, hayo udah krucuk-krucuk yah ? 😁</p>
                    <p>Kalian nanti mau bukber dimana ? Mimin udah nyobain nih di tempat yang asyik buat nongkrong sama temen-temen lho! Menu-nya macem-macem mulai dari nasi sampe pancake! Dan cake in jar favorite mimin yg strawberry, kalo kalian yg apa ? 😋</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <div class="ui secondary pointing three item menu">
                    <a class="active item">
                        Home
                    </a>
                    <a class="item">
                        Pictures
                    </a>
                    <a class="item">
                        Shared
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
                <div class="ui segment">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9789.68769442624!2d112.77512436406448!3d-7.295478967442636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd8af3455d3857a9e!2sKober+Mie+Setan+Semolowaru!5e0!3m2!1sen!2sid!4v1503500778308" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row" id="light-gallery">
            @for($i = 0; $i < 8; $i++)
            <div class="four wide column" style="padding-bottom: 5%;">
                <div class="pictures" data-src="https://semantic-ui.com/images/wireframe/image.png">
                    <img class="ui fluid image" src="https://semantic-ui.com/images/wireframe/image.png">
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@include("frontend.core.footer")