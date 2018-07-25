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
            $table->string('dayKey')->nullable()->unique();    
            $table->date('date')->nullable(); 
            $table->string('title');
            $table->string('description')->nullable(); 
            $table->string('dayCategory',3)->nullable();
            $table->string('religionCode',3)->nullable();
            $table->foreign('religionCode')->references('code')->on('religions')->onUpdate('cascade');
            $table->integer('dayFlag');  
            $table->foreign('dayFlag')->references('flag')->on('dayflags')->onUpdate('cascade');  
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
        Schema::dropIfExists('days');
    }
}
