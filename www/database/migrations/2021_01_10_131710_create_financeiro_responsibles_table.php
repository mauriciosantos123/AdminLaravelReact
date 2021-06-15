<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceiroResponsiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financeiro_responsibles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('response_finance',255)->index();;
            $table->string('tel_finance',255)->index();;
            $table->string('email_finance',255);
            $table->integer('client_id')->unsigned()->index();

            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financeiro_responsibles');
    }
}
