<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
          
            $table->increments('id');
            $table->string('name_fantasy',255)->index();
            $table->string('company_name',255)->index();
            $table->string('cnpj',20)->index()->unique();
            $table->string('state_register',30)->index()->nullable();
            $table->string('city', 255)->index()->nullable();
            $table->string('state',255)->index()->nullable();
            $table->string('tel', 255)->index()->nullable();
            $table->string('email', 255)->index()->nullable();
            $table->string('response_contact', 255)->index()->nullable();
            $table->string('tel_response', 255)->index()->nullable();
            $table->string('email_response', 255)->index()->nullable();
            $table->integer('active')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
