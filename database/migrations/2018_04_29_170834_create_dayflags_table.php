<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

class CreateDayflagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dayflags', function (Blueprint $table) {
            $table->bigInteger('flag')->primary();
            $table->string('name_en');
            $table->string('name_bn');
            $table->integer('display_order');
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
        Schema::dropIfExists('dayflags');
    }
}
