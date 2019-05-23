<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName',30);
            $table->string('lastName',30);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile',20)->unique()->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->nullable();
            //$table->foreign('created_by')->references('id')->on('users');//->onUpdate('cascade')->onDelete('cascade');  
            $table->integer('updated_by')->nullable();
            //$table->foreign('updated_by')->references('id')->on('users');//->onUpdate('cascade')->onDelete('cascade');   
            $table->integer('deleted_by')->nullable();
            //$table->foreign('deleted_by')->references('id')->on('users');//->onUpdate('cascade')->onDelete('cascade');  
            $table->timestamp("restored_at")->nullable();
            $table->integer('restored_by')->unsigned()->nullable();
            // $table->foreign('restored_by')->references('id')->on('users'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
