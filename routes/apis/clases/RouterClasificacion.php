<?php 

use Illuminate\Support\Facades\Route; 

Route::group(['prefix' => 'clasificacion'], function () {
    /*
     * 1. DESCRIPCIÓN: consulta para obtener los datos de la tabla clasificacion
     * 3. Api Local:     http://localhost/GuiApp/public/api/v1/clasificacion
     * 4. Api Server:    http://guiapp.com/public/api/v1/clasificacion
     */
    Route::get('', 'clases\ClasificacionController@getClassification');
    /*
     * 1. DESCRIPCIÓN: consulta para obtener por medio del id los datos de la tabla
     * 3. Api Local:     http://localhost/GuiApp/public/api/v1/clasificacion/1
     * 4. Api Server:    http://guiapp.com/public/api/v1/clasificacion/1
     */
    Route::get('/{id}', 'clases\ClasificacionController@getClassificationById');
    /*
    * 1.  DESCRIPCIÓN: hacer el registro de una clasificacion por medio de post
    * 2.  PARAMETRO BODY: {
                            "clasificacion": "Floristeria"
                        }
    * 3.  Api Local: http://localhost/GuiApp/public/api/v1/clasificacion
    */
    Route::post('','clases\ClasificacionController@postClassification');
    /*
    * 1.  DESCRIPCIÓN: hacer el registro de una clasificacion por medio de post
    * 2.  PARAMETRO BODY: {
                            "clasificacion": "Floristeria"
                        }
    * 3.  Api Local: http://localhost/GuiApp/public/api/v1/clasificacion/1
    */
    Route::put('/{id}','clases\ClasificacionController@putClassification');
});