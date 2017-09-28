"use strict";
const axios             = require("axios");
const readMore          = document.getElementsByClassName("read-more");
const description       = document.getElementById("description");
const image             = document.getElementById("image");
const fullPost          = document.getElementById("full-post");
const readMoreLength    = readMore.length;
const endPointDetailCafe= "helper/ajax/cafe-detail";
const prefixStorage     = "storage/app/";
const prefixFullPost    = "cafe?cafeId=";

const requestDetailCafe = (cafeId) =>{
    let URLSearchParam = new URLSearchParams();
    URLSearchParam.append("cafeId", cafeId);
    return axios({
        url: window.baseUrl+endPointDetailCafe,
        method:"POST",
        headers:{
            "X-Requested-With": "XMLHttpRequest"
        },
        data: URLSearchParam
    });
};
const showModalDetail = (cafeData) =>{
    description.innerHTML = cafeData.notes;
    image.setAttribute("src", prefixStorage+cafeData.thumbnail[0].detail.path);
    fullPost.setAttribute("href",prefixFullPost+cafeData.id);
    $('#modal-post-descriptions').modal({
        blurring: true
    }).modal('show');
};
if(!!readMore)
{
    for(let i = 0; i < readMoreLength; i++)
    {
        readMore[i].addEventListener("click",()=>{
            let cafeId  = readMore[i].getAttribute("cafe-id");
            let request = requestDetailCafe(cafeId);
            request.then((response)=>{
                showModalDetail(response.data);
            }).catch((error)=>{
                throw new Error("Error: "+error);
            });
        }, false);
    }
}