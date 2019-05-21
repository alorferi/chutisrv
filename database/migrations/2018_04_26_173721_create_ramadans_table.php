<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamadansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ramadans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('sehrTime',4);
            $table->string('fajrTime',4)->nullable(true);
            $table->string('iftarTime',4);
            $table->string('areaCode',6);
            $table->foreign('areaCode')->references('code')->on('areas')->onUpdate('cascade');
            $table->unique(['date', 'areaCode']);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users');  
            $table->integer('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users');   
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->foreign('deleted_by')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ramadans');
    }
}
