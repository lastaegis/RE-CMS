"use strict";

var cityTable = $("#city-table");
if (!!cityTable) {
    cityTable.dataTable({
        processing: true,
        serverSide: true,
        ajax: {
            "url": window.baseUrl + 'admin/datatables/city-default',
            "type": "POST"
        },
        columns: [{
            data: 'id',
            name: 'id'
        }, {
            data: 'province.province',
            name: 'province.provicne'
        }, {
            data: 'city',
            name: 'city'
        }, {
            data: 'slug',
            name: 'slug'
        }, {
            data: 'created_at',
            name: 'created_at'
        }, {
            data: 'updated_at',
            name: 'updated_at'
        }, {
            data: 'action',
            name: 'action'
        }],
        order: [[0, 'asc']]
    });
}
//# sourceMappingURL=city.js.map