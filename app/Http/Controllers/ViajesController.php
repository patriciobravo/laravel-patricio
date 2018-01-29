<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\travel;
use App\Viajes;
use App\Sex;
use SoapClient;


class ViajesController extends Controller
{
    
     public function index()
    {
  return view('ajax.viajes');
      /*    $customers = Client::join('sexes','sexes.id', '=', 'clients.sex_id')
                ->selectRaw('sexes.sex,
                             clients.rut_client,
                             clients.first_name,
                             clients.last_name_one,
                             clients.email,
                             CONCAT(clients.last_name_one," ",clients.last_name_two) AS full_last_name,
                             CONCAT(clients.first_name," ",clients.last_name_one) AS full_name, clients.id')->get();
          return response()->json(["customers" =>$customers]);
    }
     public function sex()
    {
        return response()->json(['sexes'=>Sex::all()]);
    }*/

   
    }
    public function producto($id)
{
    return "Esto muestra un producto. Recibiendo $id";
}

    public function europ(){

        try{
			$param = array(
				'usuario' => 'ESTOYSEGURO',
				'clave' => 'EstoySeguro342',
				'cantPasajeros' => '1',
				'idEmpresa' => '662',
				'idPlan' => '570',
				'FSalida' => '30/01/2018',
                'FRetorno' => '15/02/2018'
			);
			$client=@new SoapClient("http://www.europaassistance.cl/LAN/Emision.asmx?WSDL", array('soap_version' => SOAP_1_2));
            $response = $client->Cotizacion($param);
            $rrr = $response->CotizacionResult;
            dd($response,$param);
        }
        catch(SoapFault $fault) {
        echo '<br>'.$fault;
    }
             // return  view('test'{$rrr});
                 return 'hola';

    }
    public function getviajes()
    {
        return travel::orderBy('cotiza_viaje_id','DESC')->get();
       // return 'getViajes';
    }
     
} 



