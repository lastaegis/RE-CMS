"use strict";

var axios = require("axios");
var countrySelect = document.getElementById("select-country");
var provinceSelect = document.getElementById("select-province");
var citySelect = document.getElementById("select-city");
var districtSelect = document.getElementById("select-district");
var endPointProvince = "admin/helper/ajax/province-list";
var endPointCity = "admin/helper/ajax/city-list";
var endPointDistrict = "admin/helper/ajax/district-list";

/**
 *
 * @param param
 * @param endPoint
 */
var requestData = function requestData(param, endPoint) {
    return axios({
        url: window.baseUrl + endPoint,
        method: "POST",
        headers: {
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
var appendDataToSelect = function appendDataToSelect(dataList, DOM) {
    if (DOM === provinceSelect) {
        clearDataFromSelect(DOM);
        dataList.forEach(function (list) {
            var optionAttribute = document.createElement("option");
            optionAttribute.text = list.province;
            optionAttribute.value = list.id;
            DOM.append(optionAttribute);
        });
    }
    if (DOM === citySelect) {
        clearDataFromSelect(DOM);
        dataList.forEach(function (list) {
            var optionAttribute = document.createElement("option");
            optionAttribute.text = list.city;
            optionAttribute.value = list.id;
            DOM.append(optionAttribute);
        });
    }
    if (DOM === districtSelect) {
        clearDataFromSelect(DOM);
        dataList.forEach(function (list) {
            var optionAttribute = document.createElement("option");
            optionAttribute.text = list.district;
            optionAttribute.value = list.id;
            DOM.append(optionAttribute);
        });
    }
};

/**
 * For clear options data
 * @param DOM
 */
var clearDataFromSelect = function clearDataFromSelect(DOM) {
    DOM.options.length = 0;
    if (DOM === provinceSelect) {
        DOM.innerHTML = "<option value=''>--- Select Province ---</option>";
    }
    if (DOM === citySelect) {
        DOM.innerHTML = "<option value=''>--- Select City ---</option>";
    }
    if (DOM === districtSelect) {
        DOM.innerHTML = "<option value=''>--- Select District ---</option>";
    }
};

/**
 * DOM Listener
 */
if (!!countrySelect) {
    countrySelect.addEventListener("change", function () {
        var countryId = countrySelect.value;
        var URLSearchParam = new URLSearchParams();
        URLSearchParam.append("countryId", countryId);

        var requestResult = requestData(URLSearchParam, endPointProvince);
        requestResult.then(function (response) {
            appendDataToSelect(response.data, provinceSelect);
        }).catch(function (error) {
            throw new Error("Error: " + error);
        });
    });
}

if (!!citySelect) {
    provinceSelect.addEventListener("change", function () {
        var provinceId = provinceSelect.value;
        var URLSearchParam = new URLSearchParams();
        URLSearchParam.append("provinceId", provinceId);
        var requestResult = requestData(URLSearchParam, endPointCity);
        requestResult.then(function (response) {
            appendDataToSelect(response.data, citySelect);
        }).catch(function (error) {
            throw new Error("Error: " + error);
        });
    });
}

if (!!districtSelect) {
    citySelect.addEventListener("change", function () {
        var cityId = citySelect.value;
        var URLSearchParam = new URLSearchParams();
        URLSearchParam.append("cityId", cityId);
        var requestResult = requestData(URLSearchParam, endPointDistrict);
        requestResult.then(function (response) {
            appendDataToSelect(response.data, districtSelect);
        }).catch(function (error) {
            throw new Error("Error: " + error);
        });
    });
}
//# sourceMappingURL=location.js.map