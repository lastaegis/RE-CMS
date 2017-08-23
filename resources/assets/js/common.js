"use strict";
$(document).ready(function(){
    $('.special.cards .image').dimmer({
        on: 'hover'
    });

    $('.read-more').click(function(){
        $('#modal-post-descriptions').modal({
            blurring: true
        }).modal('show');
    });

    $(".close-button").click(function () {
        $("#modal-post-descriptions").modal("hide");
    });
    
    $("#light-gallery").lightGallery({
        selector: ".pictures"
    });
});