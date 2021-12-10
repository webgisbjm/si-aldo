<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('spms', function (Blueprint $table) {
            $table->unsignedBigInteger('kelurahans_id');
            $table->foreign('kelurahans_id', 'kelurahans_fk_5267199')->references('id')->on('kelurahans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('spms', function (Blueprint $table) {
            //
        });
    }
}
