"use strict";

var axios = require("axios");
var file = document.getElementsByClassName("modal-file");
var fileName = document.getElementById("file-name");
var fileDownload = document.getElementById("file-download");
var fileImage = document.getElementById("image-source");
var changeFile = document.getElementById("change-file");
var totalFile = file.length;

/**
 * Use to get detail file base by file id
 * @param fileId
 */
var getDetailFile = function getDetailFile(fileId) {
    var URLSearchParam = new URLSearchParams();
    URLSearchParam.append("id", fileId);

    return axios({
        url: window.baseUrl + "admin/helper/ajax/detail-file",
        method: "POST",
        headers: {
            "X-Requested-With": "XMLHttpRequest"
        },
        data: URLSearchParam
    });
};

/**
 * Use to update file name via ajax promise
 */
var updateFileName = function updateFileName() {
    var fileId = localStorage.getItem("fileId");
    var URLSearchParam = new URLSearchParams();
    URLSearchParam.append("id", fileId);
    URLSearchParam.append("title", fileName.value);

    axios({
        url: window.baseUrl + "admin/helper/ajax/update-file",
        method: "POST",
        headers: {
            "X-Requested-With": "XMLHttpRequest"
        },
        data: URLSearchParam
    }).then(function (response) {
        if (response.data.status_code === 200) {
            $("#modal-file").modal("hide");
            alert(response.data.status_message);
        }
    }).catch(function (error) {
        throw new Error("Exceptions: " + error);
    });
};

/**
 * Use to show modal and append all field with file data
 * @param fileData
 */
var modalFile = function modalFile(fileData) {
    $("#modal-file").modal("show");
    localStorage.setItem("fileId", fileData.id);
    fileName.value = fileData.file;
    fileDownload.setAttribute("href", window.baseUrl + "storage/app/" + fileData.path);
    if (fileData.mime === "image/png" || fileData.mime === "image/jpeg") {
        fileImage.setAttribute("src", window.baseUrl + "storage/app/" + fileData.path);
    }
    if (fileData.mime === "application/pdf") {
        fileImage.setAttribute("src", window.baseUrl + "public/assets/images/pdf-logo.png");
    }
    if (fileData.mime === "application/msword" || fileData.mime === "application/vnd.openxmlformats-officedocument.wordprocessingml.document") {
        fileImage.setAttribute("src", window.baseUrl + "public/assets/images/word-logo.png");
    }
    if (fileData.mime === "application/vnd.ms-powerpoint" || fileData.mime === "application/vnd.openxmlformats-officedocument.presentationml.presentation") {
        fileImage.setAttribute("src", window.baseUrl + "public/assets/images/ppt-logo.png");
    }
    if (fileData.mime === "application/vnd.ms-excel" || fileData.mime === "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {
        fileImage.setAttribute("src", window.baseUrl + "public/assets/images/excel-logo.png");
    }
};

/**
 * Use to add event listener each image
 */

var _loop = function _loop(i) {
    file[i].addEventListener('click', function () {
        var fileId = file[i].getAttribute("data-file-id");
        var detailFile = getDetailFile(fileId);
        detailFile.then(function (response) {
            modalFile(response.data);
        }).catch(function (error) {
            throw new Error("Error: " + error);
        });
    });
};

for (var i = 0; i < totalFile; i++) {
    _loop(i);
}

if (!!changeFile) {
    changeFile.addEventListener("click", function () {
        updateFileName();
    });
}
//# sourceMappingURL=modal-file.js.map