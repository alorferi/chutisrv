<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photoFileName')->nullable();
            $table->string('photoCaptionEn')->nullable();
            $table->string('photoCaptionBn')->nullable();
            $table->string('photoUrl')->nullable();
            $table->string('dayKey')->nullable()->unique();    
            $table->date('date')->nullable(); 
            $table->boolean('isFixedDate')->default(false); 
            $table->boolean('isMultiDate')->default(false); 
            $table->string('titleEn')->nullable();
            $table->string('titleBn')->nullable();
            $table->text('descriptionEn')->nullable(); 
            $table->text('descriptionBn')->nullable(); 
            $table->string('dayCategory',3)->nullable();
            $table->string('religionCode',3)->nullable();
            $table->foreign('religionCode')->references('code')->on('religions')->onUpdate('cascade');
            $table->integer('dayFlag')->nullable();  
            //$table->foreign('dayFlag')->references('flag')->on('dayflags')->onUpdate('cascade'); 
            $table->string('holidayCode',2)->nullable();
            $table->foreign('holidayCode')->references('code')->on('holidaytypes')->onUpdate('cascade');   
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users');  
            $table->integer('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users');   
            $table->integer('deleted_by')->unsigned()->nullable();
            $table->foreign('deleted_by')->references('id')->on('users'); 
            $table->timestamp("restored_at")->nullable();
            $table->integer('restored_by')->unsigned()->nullable();
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
        Schema::dropIfExists('days');
    }
}
