<?php 

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'empresas'], function () {
    /*
     * 1. DESCRIPCIÓN: consulta para obtener los datos de la tabla empresas
     * 3. Api Local:     http://localhost/GuiApp/public/api/v1/empresas
     * 4. Api Server:    http://guiapp.com/public/api/v1/empresas
     */
    Route::get('', 'clases\empresasController@getEnterprise');
    /*
     * 1. DESCRIPCIÓN: consulta para obtener por medio del id los datos de la tabla
     * 3. Api Local:     http://localhost/GuiApp/public/api/v1/empresas/1
     * 4. Api Server:    http://guiapp.com/public/api/v1/empresas/1
     */
    Route::get('/{id}', 'clases\empresasController@getEnterpriseById');
    /*
    * 1.  DESCRIPCIÓN: hacer el registro de una empresas por medio de post
    * 2.  PARAMETRO BODY: {
                            "empresas": "Floristeria"
                        }
    * 3.  Api Local: http://localhost/GuiApp/public/api/v1/empresas
    */
    Route::post('','clases\empresasController@postEnterprise');
    /*
    * 1.  DESCRIPCIÓN: hacer el registro de una empresas por medio de post
    * 2.  PARAMETRO BODY: {
                            "empresas": "Floristeria"
                        }
    * 3.  Api Local: http://localhost/GuiApp/public/api/v1/empresas/1
    */
    Route::put('/{id}','clases\empresasController@putEnterprise');
});