"use strict";
const provinceTable = $("#province-table");
if(!!provinceTable)
{
    provinceTable.dataTable({
        processing: true,
        serverSide: true,
        ajax:{
            "url": window.baseUrl+'admin/datatables/province-default',
            "type": "POST"
        },
        columns: [
            {
                data: 'id',
                name: 'id',
            },
            {
                data: 'country.country',
                name: 'country.country'
            },
            {
                data: 'province',
                name: 'province'
            },
            {
                data: 'slug',
                name: 'slug'
            },
            {
                data: 'created_at',
                name: 'created_at'
            },
            {
                data: 'updated_at',
                name: 'updated_at'
            },
            {
                data: 'action',
                name: 'action'
            }
        ],
        order: [[0, 'asc']]
    });
}