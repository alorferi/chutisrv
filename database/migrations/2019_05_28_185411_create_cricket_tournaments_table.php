<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;
class CreateCricketTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricket_tournaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo_name')->nullable();
            $table->string('logo_url')->nullable();
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
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
        Schema::dropIfExists('cricket_tournaments');
    }
}
