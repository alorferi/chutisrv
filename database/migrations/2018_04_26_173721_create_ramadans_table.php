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
            $table->string('fajorTime',4)->nullable(true);
            $table->string('iftaarTime',4);
            $table->string('areaCode',6);
            $table->foreign('areaCode')->references('code')->on('areas')->onUpdate('cascade');
            $table->unique(['date', 'areaCode']);
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
        Schema::dropIfExists('ramadans');
    }
}
