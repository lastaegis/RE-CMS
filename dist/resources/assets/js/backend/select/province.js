"use strict";

var axios = require("axios");
var countrySelect = document.getElementById("select-country");
var provinceSelect = document.getElementById("select-province");
var citySelect = document.getElementById("select-district");

/**
 * Promise request
 * @param countryId
 */
var requestProvince = function requestProvince(countryId) {
    return axios({
        url: window.baseUrl + "admin/helper/ajax/province-list",
        method: "POST",
        headers: {
            "X-Requested-With": "XMLHttpRequest"
        },
        data: {
            countryId: countryId
        }
    });
};

/**
 * Append province data in province select
 * @param provinceList
 */
var appendProvinceData = function appendProvinceData(provinceList) {
    provinceList.forEach(function (province) {
        var optionAttribute = document.createElement("option");
        optionAttribute.text = province.province;
        optionAttribute.value = province.id;
        provinceSelect.append(optionAttribute);
    });
};

/**
 * DOM Listener
 */
if (!!countrySelect) {
    countrySelect.addEventListener("change", function () {
        var countryId = countrySelect.value;
        var requestResult = requestProvince(countryId);
        requestResult.then(function (response) {
            appendProvinceData(response.data);
        }).catch(function (error) {
            throw new Error("Error: " + error);
        });
    });
}
//# sourceMappingURL=province.js.map