<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyInTableCafeFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cafe_file', function (Blueprint $table) {
            $table->foreign('cafe_id')
                ->references('id')
                ->on('cafe');

            $table->foreign('file_id')
                ->references('id')
                ->on('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cafe_file', function (Blueprint $table) {
            //
        });
    }
}
