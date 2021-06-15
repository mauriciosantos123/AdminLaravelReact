<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientResponsiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_responsibles', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('client_id')->unsigned()->index();
            $table->string('response_contact', 255)->index();
            $table->string('tel_response', 255)->index()->nullable();
            $table->string('email_response', 255)->index()->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_responsibles');
    }
}
