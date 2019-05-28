<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

class CreateCricketTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricket_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();;
            $table->string('logo_name')->nullable();
            $table->string('logo_url')->nullable();
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
        Schema::dropIfExists('cricket_teams');
    }
}
