"use strict";

var axios = require("axios");
var readMore = document.getElementsByClassName("read-more");
var readMoreLength = readMore.length;
var endPointDetailCafe = "helper/ajax/cafe-detail";
var description = document.getElementById("description");
var image = document.getElementById("image");
var prefixStorage = "storage/app/";

var requestDetailCafe = function requestDetailCafe(cafeId) {
    var URLSearchParam = new URLSearchParams();
    URLSearchParam.append("cafeId", cafeId);
    return axios({
        url: window.baseUrl + endPointDetailCafe,
        method: "POST",
        headers: {
            "X-Requested-With": "XMLHttpRequest"
        },
        data: URLSearchParam
    });
};
var showModalDetail = function showModalDetail(cafeData) {
    description.innerHTML = cafeData.notes;
    image.setAttribute("src", prefixStorage + cafeData.thumbnail[0].detail.path);
    $('#modal-post-descriptions').modal({
        blurring: true
    }).modal('show');
};
if (!!readMore) {
    var _loop = function _loop(i) {
        readMore[i].addEventListener("click", function () {
            var cafeId = readMore[i].getAttribute("cafe-id");
            var request = requestDetailCafe(cafeId);
            request.then(function (response) {
                showModalDetail(response.data);
            }).catch(function (error) {
                throw new Error("Error: " + error);
            });
        }, false);
    };

    for (var i = 0; i < readMoreLength; i++) {
        _loop(i);
    }
}
//# sourceMappingURL=post.js.map