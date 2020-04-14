<?php 

use Illuminate\Support\Facades\Route; 

Route::group(['prefix' => 'lugares'], function () {
    /*
     * 1. DESCRIPCIÓN: consulta para obtener los datos de la tabla lugares
     * 3. Api Local:     http://localhost/guiapp/public/api/v1/lugares
     * 4. Api Server:    http://guiapp.com/public/api/v1/lugares
     */
    Route::get('', 'lugares\lugaresController@getPlaces');
    /*
     * 1. DESCRIPCIÓN: consulta para obtener por medio del id los datos de la tabla
     * 3. Api Local:     http://localhost/guiapp/public/api/v1/lugares/1
     * 4. Api Server:    http://guiapp.com/public/api/v1/lugares/1
     */
    Route::get('/{id}', 'lugares\lugaresController@getPlacesById');
    /*
    * 1.  DESCRIPCIÓN: hacer el registro de una lugares por medio de post
    * 2.  PARAMETRO BODY: {
                            "lugares": "Descuentos"
                        }
    * 3.  Api Local: http://localhost/guiapp/public/api/v1/lugares
    */
    Route::post('register','lugares\lugaresController@postPlaces');
    /*
    * 1.  DESCRIPCIÓN: hacer la actualización de una lugares por medio de post
    * 2.  PARAMETRO BODY: {
                            "lugares": "Descuentos"
                            "ubiacion":"Address"
                            "fecha": "2020/03/04"
                            "descripcion":"cualquier cosa"
                        }
    * 3.  Api Local: http://localhost/guiapp/public/api/v1/lugares/1
    */
    Route::put('/{id}','lugares\lugaresController@putPlaces');
 /*
    * 1.  DESCRIPCIÓN: Eliminar un evento por medio de delete y el id
    * 2.  PARAMETRO BODY: {
                            "id": "1"
                        }
    * 3.  Api Local: http://localhost/guiapp/public/api/v1/lugares/delete/{id}
    */
    Route::delete('delete/{id}','lugares\lugaresController@DestroyPlaces');
});