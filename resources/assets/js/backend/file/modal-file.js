"use strict";
const axios         = require("axios");
const file          = document.getElementsByClassName("modal-file");
const fileName      = document.getElementById("file-name");
const fileDownload  = document.getElementById("file-download");
const fileImage     = document.getElementById("image-source");
const changeFile    = document.getElementById("change-file");
const totalFile     = file.length;

/**
 * Use to get detail file base by file id
 * @param fileId
 */
const getDetailFile = (fileId) =>{
    let URLSearchParam = new URLSearchParams();
    URLSearchParam.append("id", fileId);

    return axios({
        url: window.baseUrl+"admin/helper/ajax/detail-file",
        method: "POST",
        headers:{
            "X-Requested-With": "XMLHttpRequest"
        },
        data: URLSearchParam
    });
};

/**
 * Use to update file name via ajax promise
 */
const updateFileName = () =>{
    let fileId = localStorage.getItem("fileId");
    let URLSearchParam = new URLSearchParams();
    URLSearchParam.append("id", fileId);
    URLSearchParam.append("title", fileName.value);

    axios({
        url: window.baseUrl+"admin/helper/ajax/update-file",
        method: "POST",
        headers:{
            "X-Requested-With": "XMLHttpRequest"
        },
        data: URLSearchParam
    }).then((response)=>{
        if((response.data.status_code) === 200)
        {
            $("#modal-file").modal("hide");
            alert(response.data.status_message);
        }
    }).catch((error)=>{
        throw new Error("Exceptions: "+error);
    })
};

/**
 * Use to show modal and append all field with file data
 * @param fileData
 */
const modalFile = (fileData) =>{
    $("#modal-file").modal("show");
    localStorage.setItem("fileId", fileData.id);
    fileName.value  = fileData.file;
    fileDownload.setAttribute("href", window.baseUrl+"storage/app/"+fileData.path);
    if(fileData.mime === "image/png" || fileData.mime === "image/jpeg")
    {
        fileImage.setAttribute("src", window.baseUrl+"storage/app/"+fileData.path);
    }
    if(fileData.mime === "application/pdf")
    {
        fileImage.setAttribute("src", window.baseUrl+"public/assets/images/pdf-logo.png");
    }
    if(fileData.mime === "application/msword" || fileData.mime === "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
    {
        fileImage.setAttribute("src", window.baseUrl+"public/assets/images/word-logo.png");
    }
    if(fileData.mime === "application/vnd.ms-powerpoint" || fileData.mime === "application/vnd.openxmlformats-officedocument.presentationml.presentation")
    {
        fileImage.setAttribute("src", window.baseUrl+"public/assets/images/ppt-logo.png");
    }
    if(fileData.mime === "application/vnd.ms-excel" || fileData.mime === "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
    {
        fileImage.setAttribute("src", window.baseUrl+"public/assets/images/excel-logo.png");
    }
};

/**
 * Use to add event listener each image
 */
for (let i = 0; i < totalFile; i++)
{
    file[i].addEventListener('click', ()=>{
        let fileId = file[i].getAttribute("data-file-id");
        let detailFile = getDetailFile(fileId);
        detailFile.then((response)=>{
            modalFile(response.data);
        }).catch((error)=>{
            throw new Error("Error: "+error);
        });
    });
}

if(!!changeFile)
{
    changeFile.addEventListener("click", ()=>{
        updateFileName();
    });
}