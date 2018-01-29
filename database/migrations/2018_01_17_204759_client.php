<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut_client');
            $table->string('first_name');
            $table->string('last_name_one');
            $table->string('last_name_two');
            $table->string('email');
            $table->string('address');
            $table->string('address_num');
            $table->string('address_department');
            $table->string('phono_client');
            $table->string('cell_phone_client');
            $table->string('birth_date');
            $table->string('sex_id');            
            $table->string('civil_status');
            $table->string('date_creation');
            $table->string('city');
            $table->string('commune');
            $table->string('region');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
