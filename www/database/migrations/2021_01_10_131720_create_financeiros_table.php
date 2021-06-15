<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('form_payment', 255)->index();
            $table->string('value', 255)->index();
            $table->string('type_payment', 255)->index();
            $table->string('readjustment', 255)->nullable();
            $table->string('early_warning', 255)->nullable();
            $table->string('termination', 255)->nullable();
            $table->integer('client_id')->unsigned()->index();
            $table->date('end_fidelity')->nullable();
            $table->date('contract_start');
            $table->string('contract_end',255)->nullable();
            $table->date('dt_payment');
            $table->string('response_finance',255)->index()->nullable();
            $table->string('tel_finance',255)->index()->nullable();
            $table->string('email_finance',255)->nullable();
     

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
        Schema::dropIfExists('financeiros');
    }
}
