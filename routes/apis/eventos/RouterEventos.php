<?php 

use Illuminate\Support\Facades\Route; 

Route::group(['prefix' => 'eventos'], function () {
    /*
     * 1. DESCRIPCIÓN: consulta para obtener los datos de la tabla eventos
     * 3. Api Local:     http://localhost/guiapp/public/api/v1/eventos
     * 4. Api Server:    http://guiapp.com/public/api/v1/eventos
     */
    Route::get('', 'eventos\eventosController@getEvents');
    /*
     * 1. DESCRIPCIÓN: consulta para obtener por medio del id los datos de la tabla
     * 3. Api Local:     http://localhost/guiapp/public/api/v1/eventos/1
     * 4. Api Server:    http://guiapp.com/public/api/v1/eventos/1
     */
    Route::get('/{id}', 'eventos\eventosController@getEventsById');
    /*
    * 1.  DESCRIPCIÓN: hacer el registro de una eventos por medio de post
    * 2.  PARAMETRO BODY: {
                            "eventos": "Descuentos"
                        }
    * 3.  Api Local: http://localhost/guiapp/public/api/v1/eventos
    */
    Route::post('register','eventos\eventosController@postEvents');
    /*
    * 1.  DESCRIPCIÓN: hacer la actualización de una eventos por medio de post
    * 2.  PARAMETRO BODY: {
                            "eventos": "Descuentos"
                            "ubiacion":"Address"
                            "fecha": "2020/03/04"
                            "descripcion":"cualquier cosa"
                        }
    * 3.  Api Local: http://localhost/guiapp/public/api/v1/eventos/1
    */
    Route::put('/{id}','eventos\eventosController@putEvents');
 /*
    * 1.  DESCRIPCIÓN: Eliminar un evento por medio de delete y el id
    * 2.  PARAMETRO BODY: {
                            "id": "1"
                        }
    * 3.  Api Local: http://localhost/guiapp/public/api/v1/eventos/delete/{id}
    */
    Route::delete('delete/{id}','eventos\eventosController@DestroyEvents');
});