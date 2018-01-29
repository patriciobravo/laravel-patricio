<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Sex;

class ClientController extends Controller
{
     public function index()
    {
    $sexes = Sex::pluck('sex', 'id');
    return view('ajax.index', compact('sexes'));
    }

     public function readData ()
    {
        $clients = Client::join('sexes','sexes.id', '=', 'clients.sex_id')
                ->selectRaw('sexes.sex,
                             clients.rut_client,
                             clients.first_name,
                             clients.last_name_one,
                             clients.email,
                             CONCAT(clients.last_name_one," ",clients.last_name_two) AS full_last_name,
                             CONCAT(clients.first_name," ",clients.last_name_one) AS full_name, clients.id')
        ->get();

        //return response($clients);
        return view('ajax.clientList', compact('clients'));

    }

    // INSERT CLIENT
    public function store(Request $request)
    {
        if ($request->ajax())
        {
            $client = Client::create($request->all());
            //dd($client);
           
           return response($this->find($client->id));
            //return response($request->all());
        }
    }
      public function find($id)
    {
        return  Client::join('sexes','sexes.id', '=', 'clients.sex_id')
                ->selectRaw('sexes.sex,
                             clients.rut_client,
                             clients.first_name,
                             clients.last_name_one,
                             clients.email,
                             CONCAT(clients.last_name_one," ",clients.last_name_two) AS full_last_name,
                             CONCAT(clients.first_name," ",clients.last_name_one) AS full_name, clients.id')  
            
                ->where('clients.id', $id)->first();           

                    
    }
     public function destroy(Request $request){

            if ($request->ajax())
            {
                Client::destroy($request->id);
                return response(['message'=>'Eliminado Correctamente']);
                
            }
    }
    public function edit(Request $request) {
            if ($request->ajax())
            {
                $client = Client::find($request->id);
                return response($client);
               
            }
    }
    public function update(Request $request) {
            if ($request->ajax())
            {
                $client = Client::find($request->id);
                $client->update($request->all());
                
                return response($this->find($client->id));
                //return response(['message'=>'Actualizado Correctamente']);
            }
    }
   public function findPage()
    {
         return Student::join('sexes','sexes.id', '=', 'students.sex_id')
                ->selectRaw('sexes.sex,
                             students.sex_id,
                             students.first_name,
                             students.last_name,
                             CONCAT(students.first_name," ",students.last_name) AS full_name, students.id')  
            ->paginate(1);
    }
    public function pagination()
        {
            $students = $this->findPage();

            return view('ajax.pagination', compact('students'));
            
        }
    public function studentPage()
    {
          $students = $this->findPage();

        return view('ajax.studentPage', compact('students'))->render();
    }  
    
    /*------------------------- COMIENZA VIAJES-------------------------*/

     public function viajes()
    {
    return view('ajax.viajes');
    }

    public function search(Request $request)
    {
        $search= $request->term;
        $clients = Client::where('rut_client', 'LIKE', '%'.$search. '%')
                            ->orWhere('last_name_one','LIKE', '%'.$search. '%')
                            ->selectRaw('id, rut_client AS value ,first_name,last_name_one,sex_id,email,rut_client,cell_phone_client')
                            ->get();
        $clients->toArray();
  
        return response($clients);
    }
}
