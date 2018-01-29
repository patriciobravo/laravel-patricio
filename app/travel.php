<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    protected $fillable =['cotiza_viaje_id','cotiza_viaje_aseg' ,'cotiza_viaje_plan' , 'cotiza_viaje_rut' ,
                 'cotiza_viaje_usd' ,'cotiza_viaje_precio' ,'cotiza_viaje_salida' ,'cotiza_viaje_regreso',
                 'cotiza_salida_bd' ,'cotiza_regreso_bd' ,'cotiza_viaje_pasajeros' ,'cotiza_viaje_fecha' ,
                'cotiza_viaje_origen' ,'origen_origen_id' ,'cotiza_viaje_vendedor_id' ,'cotiza_viaje_destino',
                'cotiza_viaje_responsable'];

                         
}
