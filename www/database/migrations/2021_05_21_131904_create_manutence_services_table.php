<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManutenceServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manutence_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_service',255)->index()->nullable();
            $table->string('type_service',255)->index()->nullable();
            $table->string('extra_value',255)->nullable();
            $table->text('completion_time')->nullable();
            $table->integer('approved')->nullable();
            $table->date('dt_start')->nullable();
            $table->date('dt_finish')->nullable();
            $table->integer('client_id')->unsigned()->index();
            $table->integer('service_id')->unsigned()->index();
            $table->integer('categorypayments_id')->unsigned()->index();


            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('service_id')->references('id')->on('category_services');
            $table->foreign('categorypayments_id')->references('id')->on('category_order_payments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manutence_services');
    }
}
