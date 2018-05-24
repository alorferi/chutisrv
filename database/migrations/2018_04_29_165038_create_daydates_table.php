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
            $table->string('holidayCode',2);
            $table->foreign('holidayCode')->references('code')->on('holidaytypes')->onUpdate('cascade');  
            $table->string('stared',1)->nullable();
            $table->date('dayDate');     
            $table->string('dayKey');
            $table->integer('dayId')->references('id')->on('days')->nullable();  
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
        Schema::dropIfExists('daydates');
    }
}
