<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

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
            TableUtils::dmlBy($table);
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
