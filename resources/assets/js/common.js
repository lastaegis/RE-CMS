"use strict";
$(document).ready(function(){
    $('.special.cards .image').dimmer({
        on: 'hover'
    });

    $(".close-button").click(function () {
        $("#modal-post-descriptions").modal("hide");
    });
    
    $("#light-gallery").lightGallery({
        selector: ".pictures"
    });
});