<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

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
            $table->bigIncrements('id');
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
            $table->bigInteger('dayFlag')->nullable();  
            //$table->foreign('dayFlag')->references('flag')->on('dayflags')->onUpdate('cascade'); 
            $table->string('holidayCode',2)->nullable();
            $table->foreign('holidayCode')->references('code')->on('holidaytypes')->onUpdate('cascade');   
            $table->string('country_code',2)->nullable();
            $table->foreign('country_code')->references('code')->on('countries')->onUpdate('cascade');
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
        Schema::dropIfExists('days');
    }
}
