<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaydatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daydates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dayKey')->nullable();  
            $table->string('bannerFileName')->nullable();  
            $table->string('bannerCaptionEn')->nullable();  
            $table->string('bannerCaptionBn')->nullable();  
            $table->string('bannerUrl')->nullable();  
            $table->string('holidayCode',2)->nullable();
            $table->foreign('holidayCode')->references('code')->on('holidaytypes')->onUpdate('cascade');  
            $table->string('stared',1)->nullable();
            $table->date('date');   
            $table->integer('dayId')->references('id')->on('days')->nullable();  
            $table->unique(['date', 'dayId']);
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
        Schema::dropIfExists('daydates');
    }
}
