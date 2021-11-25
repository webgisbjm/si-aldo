<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNsupsTable extends Migration
{
    public function up()
    {
        Schema::create('nsups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('years');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
