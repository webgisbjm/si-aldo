<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qty_house');
            $table->string('year');
            $table->integer('basic_target');
            $table->integer('spalds_target');
            $table->integer('spaldt_target');
            $table->integer('basic_realization');
            $table->integer('spalds_realization');
            $table->integer('spaldt_realization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Spm');
    }
}
