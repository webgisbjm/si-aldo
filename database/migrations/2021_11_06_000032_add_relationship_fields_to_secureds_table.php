<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSecuredsTable extends Migration
{
    public function up()
    {
        Schema::table('secureds', function (Blueprint $table) {
            $table->unsignedBigInteger('kecamatan_id');
            $table->foreign('kecamatan_id', 'kecamatan_fk_5274240')->references('id')->on('kecamatans');
        });
    }
}
