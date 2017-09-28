"use strict";
const cafeTable = $("#cafe-table");
if(!!cafeTable)
{
    cafeTable.dataTable({
        processing: true,
        serverSide: true,
        ajax:{
            "url": window.baseUrl+'admin/datatables/cafe-default',
            "type": "POST"
        },
        columns: [
            {
                data: 'id',
                name: 'id',
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'address',
                name: 'address'
            },
            {
                data: 'status',
                name: 'status'
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