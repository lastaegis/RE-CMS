"use strict";
const axios             = require("axios");
const countrySelect     = document.getElementById("select-country");
const provinceSelect    = document.getElementById("select-province");
const citySelect        = document.getElementById("select-city");
const districtSelect    = document.getElementById("select-district");
const endPointProvince  = "admin/helper/ajax/province-list";
const endPointCity      = "admin/helper/ajax/city-list";
const endPointDistrict  = "admin/helper/ajax/district-list";

/**
 *
 * @param param
 * @param endPoint
 */
const requestData = (param, endPoint) =>{
    return axios({
        url: window.baseUrl+endPoint,
        method: "POST",
        headers:{
            "X-Requested-With": "XMLHttpRequest"
        },
        data: param
    });
};

/**
 *
 * @param dataList
 * @param DOM
 */
const appendDataToSelect = (dataList, DOM) =>{
    if(DOM === provinceSelect)
    {
        clearDataFromSelect(DOM);
        dataList.forEach((list)=>{
            let optionAttribute     = document.createElement("option");
            optionAttribute.text    = list.province;
            optionAttribute.value   = list.id;
            DOM.append(optionAttribute);
        });
    }
    if(DOM === citySelect)
    {
        clearDataFromSelect(DOM);
        dataList.forEach((list)=>{
            let optionAttribute     = document.createElement("option");
            optionAttribute.text    = list.city;
            optionAttribute.value   = list.id;
            DOM.append(optionAttribute);
        });
    }
    if(DOM === districtSelect)
    {
        clearDataFromSelect(DOM);
        dataList.forEach((list)=>{
            let optionAttribute     = document.createElement("option");
            optionAttribute.text    = list.district;
            optionAttribute.value   = list.id;
            DOM.append(optionAttribute);
        });
    }
};

/**
 * For clear options data
 * @param DOM
 */
const clearDataFromSelect = (DOM) =>{
    DOM.options.length = 0;
    if(DOM === provinceSelect)
    {
        DOM.innerHTML = "<option value=''>--- Select Province ---</option>";
    }
    if(DOM === citySelect)
    {
        DOM.innerHTML = "<option value=''>--- Select City ---</option>";
    }
    if(DOM === districtSelect)
    {
        DOM.innerHTML = "<option value=''>--- Select District ---</option>";
    }
};

/**
 * DOM Listener
 */
if(!!countrySelect)
{
    countrySelect.addEventListener("change",() => {
        let countryId       = countrySelect.value;
        let URLSearchParam  = new URLSearchParams();
        URLSearchParam.append("countryId", countryId);

        let requestResult   = requestData(URLSearchParam, endPointProvince);
        requestResult.then((response)=>{
            appendDataToSelect(response.data, provinceSelect);
        }).catch((error)=>{
            throw new Error("Error: "+error);
        });
    });
}

if(!!citySelect)
{
    provinceSelect.addEventListener("change",()=>{
        let provinceId      = provinceSelect.value;
        let URLSearchParam  = new URLSearchParams();
        URLSearchParam.append("provinceId", provinceId);
        let requestResult   = requestData(URLSearchParam, endPointCity);
        requestResult.then((response)=>{
            appendDataToSelect(response.data, citySelect);
        }).catch((error)=>{
            throw new Error("Error: "+error);
        });
    });
}

if(!!districtSelect)
{
    citySelect.addEventListener("change",()=>{
        let cityId          = citySelect.value;
        let URLSearchParam  = new URLSearchParams();
        URLSearchParam.append("cityId", cityId);
        let requestResult   = requestData(URLSearchParam, endPointDistrict);
        requestResult.then((response)=>{
            appendDataToSelect(response.data, districtSelect);
        }).catch((error)=>{
            throw new Error("Error: "+error);
        });
    });
}
