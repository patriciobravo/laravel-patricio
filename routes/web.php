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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    $sexes = App\Sex::all();
    return view('viajes', compact('sexes'));
});


Route::get('clients','ClientController@index'); // RUTA PARA IR A PAGINA PRINCIPAL  

Route::get('clients/read-data','ClientController@readData'); // RUTA PARA MOSTRAR DATOS

Route::post('/clients/store', 'ClientController@store'); // RUTA PARA CREAR NUEVO CLIENTE

Route::get('/clients/edit', 'ClientController@edit'); //RUTA PARA EDITAR CLIENTE

Route::post('/clients/update', 'ClientController@update');

Route::post('/clients/destroy', 'ClientController@destroy'); //RUTA PARA ELIMINAR CLIENTE

Route::get('viajes','ViajesController@index'); // RUTA PARA IR A VIAJES PRINCIPAL  

Route::get('/autocomplete-search', 'ClientController@search');

Route::post('/travel/europ','ViajesController@europ');
Route::post('/clients/store', 'ViajesController@store');
Route::get('/prueba/travel','ViajesController@getviajes');
// Route::get('/travel/europ', function() { return View::make('europ'); }); 
/*
dsddsd
Route::get('travel/europ', function() 
{ 
    return View::europ('europ'); 
}); 
Route::post('adding_to_table', function() 
{ 
    DB::table('user_info')->insert( 
        array("First_name" => Input::get('firstname'), 
              "Last_name" => Input::get("lastname"), 
              "E-mail" => Input::get("email"), 
              "Username" => Input::get("username"), 
              "Password" => Input::get("password"),
               )
             );
             });*/

//Route::get('/europ', function () {

    /*try{
			$param = array(
				'usuario' => 'ESTOYSEGURO',
				'clave' => 'EstoySeguro342',
				'cantPasajeros' => '1',
				'idEmpresa' => '662',
				'idPlan' => '568',
				'FSalida' => '26/01/2018',
                'FRetorno' => '31/01/2018'
			);
			$client=@new SoapClient("http://www.europaassistance.cl/LAN/Emision.asmx?WSDL", array('soap_version' => SOAP_1_2));
            $response = $client->Cotizacion($param);
            $rrr = $response->CotizacionResult;
            dd($response);

        }catch(SoapFault $fault) {
        echo '<br>'.$fault;*/
   // }

//});

//VUE
/*Route::get('/', function () {
    //$sexes = App\Sex::all();
    return view('viajes', compact('sexes'));
});


Route::resource('viajes','ViajesController');

//Route::get('viajes','ViajesController@getviajes');


Route::get('sex','ViajesController@sex');

Auth::routes();*/
