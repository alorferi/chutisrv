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
            $table->bigIncrements('id');
            $table->string('dayKey')->nullable();  
            $table->string('bannerFileName')->nullable();  
            $table->string('bannerCaptionEn')->nullable();  
            $table->string('bannerCaptionBn')->nullable();  
            $table->string('bannerUrl')->nullable();  
            $table->string('holidayCode',2)->nullable();
            $table->foreign('holidayCode')->references('code')->on('holidaytypes')->onUpdate('cascade');  
            $table->string('stared',1)->nullable();
            $table->date('date');   
            $table->bigInteger('dayId')->references('id')->on('days')->nullable();  
            $table->unique(['date', 'dayId']);
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users');  
            $table->bigInteger('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users');   
            $table->bigInteger('deleted_by')->unsigned()->nullable();
            $table->foreign('deleted_by')->references('id')->on('users'); 
            $table->timestamp("restored_at")->nullable();
            $table->bigInteger('restored_by')->unsigned()->nullable();
            $table->foreign('restored_by')->references('id')->on('users');   
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
