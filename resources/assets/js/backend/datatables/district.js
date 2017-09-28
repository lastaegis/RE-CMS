"use strict";
const districtTable = $("#district-table");
if(!!districtTable)
{
    districtTable.dataTable({
        processing: true,
        serverSide: true,
        ajax:{
            "url": window.baseUrl+'admin/datatables/district-default',
            "type": "POST"
        },
        columns: [
            {
                data: 'id',
                name: 'id',
            },
            {
                data: 'city.city',
                name: 'city.city'
            },
            {
                data: 'district',
                name: 'district'
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