<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToRisksTable extends Migration
{
    public function up()
    {
        Schema::table('risks', function (Blueprint $table) {
            $table->unsignedBigInteger('kelurahan_id');
            $table->foreign('kelurahan_id', 'kelurahan_fk_5273880')->references('id')->on('kelurahans');
        });
    }
}
