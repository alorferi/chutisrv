<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\TableUtils;

class CreateDayMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('text');
            $table->bigInteger('day_id')->unsigned()->nullable();
            $table->foreign('day_id')->references('id')->on('days');  
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
        Schema::dropIfExists('day_messages');
    }
}
