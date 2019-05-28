<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_token',255);
            $table->string('os',10);
            $table->bigInteger('version_number');
            $table->string('version_name');
            $table->string('package_name');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');  
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('deleted_by')->unsigned()->nullable();
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->timestamp("restored_at")->nullable();
            $table->bigInteger('restored_by')->unsigned()->nullable();
            $table->foreign('restored_by')->references('id')->on('users');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_devices');
    }
}
