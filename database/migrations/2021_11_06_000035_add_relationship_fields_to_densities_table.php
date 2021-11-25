<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDensitiesTable extends Migration
{
    public function up()
    {
        Schema::table('densities', function (Blueprint $table) {
            $table->unsignedBigInteger('kelurahans_id');
            $table->foreign('kelurahans_id', 'kelurahans_fk_5267140')->references('id')->on('kelurahans');
        });
    }
}
