<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     protected $fillable =['rut_client','first_name','last_name_one','last_name_two','email','address','address_num','address_department','phone_client',
                           'cell_phone_client','birth_date','sex_id','civil_status','city','commune','region'];
     //public $timestamps=false;
}
