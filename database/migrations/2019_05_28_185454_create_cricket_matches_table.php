<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

class CreateCricketMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricket_matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('starts_at');
            $table->bigInteger('team_a_id')->unsigned()->nullable();
            $table->foreign('team_a_id')->references('id')->on('cricket_teams')->onUpdate('cascade');
            $table->bigInteger('team_b_id')->unsigned()->nullable();
            $table->foreign('team_b_id')->references('id')->on('cricket_teams')->onUpdate('cascade');
            $table->bigInteger('stadium_id')->unsigned()->nullable();
            $table->foreign('stadium_id')->references('id')->on('cricket_stadiums')->onUpdate('cascade');
            $table->string('cric_info_url',300)->nullable();;
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
        Schema::dropIfExists('cricket_matches');
    }
}
