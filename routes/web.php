<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    "as"    => "landing",
    "uses"  => "Frontend\Landing@view"
]);

Route::group(['namespace'=>'Frontend'], function(){
    Route::get('/cafe',[
        "as"    => "cafe",
        "uses"  => "Post@view"
    ]);

    /**
     * Routing Helper
     */
    Route::group(['prefix'=>'helper','namespace'=>'Helper'], function(){
        Route::group(['prefix'=>'ajax','namespace'=>'Ajax','middleware'=>['ajaxaccess']], function(){
            Route::post('/cafe-detail',[
                "as"    => "helper.ajax.cafe-detail",
                "uses"  => "Cafe@getDetailById"
            ]);
        });
    });
});

/**
 * Backend Routing
 */
Route::group(['prefix'=>'admin','namespace'=>'Backend'], function(){

    /**
     * Country Management Routing
     */
    Route::group(['prefix'=>'country','namespace'=>'Country'], function(){
        Route::get('/',[
            'as'    => 'admin.country',
            'uses'  => 'Get@view'
        ]);

        Route::get('/form-create',[
            "as"    => 'admin.country.create',
            "uses"  => "Create@view"
        ]);

        Route::post('/form-create/submit',[
            "as"    => "admin.country.create.submit",
            "uses"  => "Create@submit"
        ]);

        Route::get('/form-update',[
            "as"    => "admin.country.update",
            "uses"  => "Update@view"
        ]);

        Route::post('/form-update/submit',[
            "as"    => "admin.country.update.submit",
            "uses"  => "Update@submit"
        ]);

        Route::get('/form-delete',[
            "as"    => "admin.country.delete",
            "uses"  => "Delete@view"
        ]);

        Route::post('/form-delete/submit',[
            "as"    => "admin.country.delete.submit",
            "uses"  => "Delete@submit"
        ]);
    });

    /**
     * Province Management Routing
     */
    Route::group(['prefix'=>'province','namespace'=>'Province'], function(){
        Route::get('/',[
            "as"    => "admin.province",
            "uses"  => "Get@view"
        ]);

        Route::get('/form-create',[
            "as"    => "admin.province.create",
            "uses"  => "Create@view"
        ]);

        Route::post('/form-create/submit',[
            "as"    => "admin.province.create.submit",
            "uses"  => "Create@submit"
        ]);

        Route::get('/form-update',[
            "as"    => "admin.province.update",
            "uses"  => "Update@view"
        ]);

        Route::post('/form-update/submit',[
            "as"    => "admin.province.update.submit",
            "uses"  => "Update@submit"
        ]);

        Route::get('/form-delete',[
            "as"    => "admin.province.delete",
            "uses"  => "Delete@view"
        ]);

        Route::post('/form-delete/submit',[
            "as"    => "admin.province.delete.submit",
            "uses"  => "Delete@submit"
        ]);
    });

    Route::group(['prefix'=>'city','namespace'=>'City'], function(){
        Route::get('/',[
            "as"    => "admin.city",
            "uses"  => "Read@view"
        ]);

        Route::get('/form-create',[
            "as"    => "admin.city.create",
            "uses"  => "Create@view"
        ]);

        Route::post('/form-create/submit',[
            "as"    => "admin.city.create.submit",
            "uses"  => "Create@submit"
        ]);

        Route::get('/form-update',[
            "as"    => "admin.city.update",
            "uses"  => "Update@view"
        ]);

        Route::post('/form-update/submit',[
            "as"    => "admin.city.update.submit",
            "uses"  => "Update@submit"
        ]);

        Route::get('/form-delete',[
            "as"    => "admin.city.delete",
            "uses"  => "Delete@view"
        ]);

        Route::post('/form-delete/submit',[
            "as"    => "admin.city.delete.submit",
            "uses"  => "Delete@submit"
        ]);
    });

    /**
     * District Management Routing
     */
    Route::group(['prefix'=>'district','namespace'=>'District'], function(){
        Route::get('/',[
            "as"    => "admin.district",
            "uses"  => "Read@view"
        ]);

        Route::get('/form-create',[
            "as"    => "admin.district.create",
            "uses"  => "Create@view"
        ]);

        Route::post('/form-create/submit',[
            "as"    => "admin.district.create.submit",
            "uses"  => "Create@submit"
        ]);

        Route::get('/form-update',[
            "as"    => "admin.district.update",
            "uses"  => "Update@view"
        ]);

        Route::post('/form-update/submit',[
            "as"    => "admin.district.update.submit",
            "uses"  => "Update@submit"
        ]);

        Route::get('/form-delete',[
            "as"    => "admin.district.delete",
            "uses"  => "Delete@view"
        ]);

        Route::post('/form-delete/submit',[
            "as"    => "admin.district.delete.submit",
            "uses"  => "Delete@submit"
        ]);
    });

    /**
     * Cafe Management Routing
     */
    Route::group(['prefix'=>'cafe','namespace'=>'Cafe'], function (){
        Route::get('/',[
            "as"    => "admin.cafe",
            "uses"  => "Read@view"
        ]);

        Route::get('/form-create',[
            "as"    => "admin.cafe.create",
            "uses"  => "Create@view"
        ]);

        Route::post('/form-create/submit',[
            "as"    => "admin.cafe.create.submit",
            "uses"  => "Create@submit"
        ]);

        Route::get('/form-update',[
            "as"    => "admin.cafe.update",
            "uses"  => "Update@view"
        ]);

        Route::post('/form-update/submit',[
            "as"    => "admin.cafe.update.submit",
            "uses"  => "Update@submit"
        ]);

        Route::get('/form-delete',[
            "as"    => "admin.cafe.delete",
            "uses"  => "Delete@view"
        ]);

        Route::post('/form-delete/submit',[
            "as"    => "admin.cafe.delete.submit",
            "uses"  => "Delete@submit"
        ]);
    });

    /**
     * File Management Routing
     */
    Route::group(['prefix'=>'file','namespace'=>'File'], function(){
        Route::get('/',[
            "as"    => "admin.file",
            "uses"  => "Read@view"
        ]);

        Route::get('/create',[
            "as"    => "admin.file.create",
            "uses"  => "Create@view"
        ]);

        Route::post('/create/submit',[
            "as"    => "admin.file.create.submit",
            "uses"  => "Create@submit"
        ]);
    });

    /**
     * Datatable Routing
     */
    Route::group(['prefix'=>'datatables','namespace'=>'Datatables'], function(){
        Route::post('/country-default',[
            "as"    => "admin/datatables/country-default",
            "uses"  => "Country@defaultDatatables"
        ]);

        Route::post('/province-default',[
            "as"    => "admin/datatables/province-default",
            "uses"  => "Province@defaultDatatables"
        ]);

        Route::post('/city-default',[
            "as"    => "admin.datatables.city-default",
            "uses"  => "City@defaultDatatables"
        ]);

        Route::post('/district-default',[
            "as"    => "admin.datatables.district-default",
            "uses"  => "District@defaultDatatables"
        ]);

        Route::post('/cafe-default',[
            "as"    => "admin.datatables.cafe-default",
            "uses"  => "Cafe@defaultDatatables"
        ]);
    });

    /**
     * Helper Routing
     */
    Route::group(['prefix'=>'helper','namespace'=>'Helper'], function(){
        Route::group(['prefix'=>'ajax','namespace'=>'Ajax','middleware'=>['ajaxaccess']], function(){
            Route::post('/province-list',[
                "as"    => "admin.helper.ajax.province-list",
                "uses"  => "Province@getByCountry"
            ]);

            Route::post('/city-list',[
                "as"    => "admin.helper.ajax.city-list",
                "uses"  => "City@getByProvince"
            ]);

            Route::post('/district-list',[
                "as"    => "admin.helper.ajax.district-list",
                "uses"  => "District@getByCity"
            ]);

            Route::post('/detail-file',[
                "as"    => "admin.helper.detail-file",
                "uses"  => "File@getDetailFile"
            ]);

            Route::post('/update-file',[
                "as"    => "admin.helper.file.update",
                "uses"  => "File@update"
            ]);
        });
    });
});