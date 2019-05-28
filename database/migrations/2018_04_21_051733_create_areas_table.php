<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->string('code',6)->primary();
            $table->string('name',30)->nullable(false);
            $table->string('localName',50)->nullable();
            $table->string('countryCode',2)->nullable();
            $table->foreign('countryCode')->references('code')->on('countries')->onUpdate('cascade');
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
        Schema::dropIfExists('areas');
    }
}
