<?php

namespace App\Utils;

use Illuminate\Database\Schema\Blueprint;

class TableUtils
{
    public static function dmlBy(Blueprint $table){
        $table->softDeletes();
        $table->bigInteger('created_by')->unsigned()->nullable();
        $table->foreign('created_by')->references('id')->on('users');  
        $table->bigInteger('updated_by')->unsigned()->nullable();
        $table->foreign('updated_by')->references('id')->on('users');   
        $table->bigInteger('deleted_by')->unsigned()->nullable();
        $table->foreign('deleted_by')->references('id')->on('users'); 
        $table->timestamp("restored_at")->nullable();
        $table->bigInteger('restored_by')->unsigned()->nullable();
        $table->foreign('restored_by')->references('id')->on('users');   
    }
}
