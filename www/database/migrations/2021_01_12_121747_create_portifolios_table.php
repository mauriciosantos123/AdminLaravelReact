<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortifoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portifolios', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->integer('client_id')->unsigned()->index();

            $table->string('name',255)->index()->nullable() ;

            $table->integer('destaque')->nullable();
            $table->text('desc')->nullable();
            $table->text('img')->nullable();
            $table->date('date_portifolio')->nullable();
            $table->text('url')->nullable();
            $table->text('logo')->nullable();
            $table->timestamps();
            
             $table->foreign('category_id')->references('id')->on('category_portfolios')->onDelete('cascade');
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
        Schema::dropIfExists('portifolios');
    }
}
