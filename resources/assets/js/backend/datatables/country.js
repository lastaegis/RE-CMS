"use strict";
const tableCountry = $("#country-table");
if(!!tableCountry)
{
    tableCountry.dataTable({
        processing: true,
        serverSide: true,
        ajax:{
            "url": window.baseUrl+'admin/datatables/country-default',
            "type": "POST"
        },
        columns: [
            {
                data: 'id',
                name: 'id',
            },
            {
                data: 'country',
                name: 'country'
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