<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

class CreateCricketPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricket_players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('photo_name')->nullable();
            $table->string('photo_url')->nullable();
            $table->date('dob')->nullable();
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
        Schema::dropIfExists('cricket_players');
    }
}
