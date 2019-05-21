<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaytypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidaytypes', function (Blueprint $table) {
            $table->string('code',2)->primary();
            $table->string('shortName',20)->unique();
            $table->string('longName',50)->unique(); 
            $table->integer('display_order');       
            $table->boolean('showInCalendar');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidaytypes');
    }
}
