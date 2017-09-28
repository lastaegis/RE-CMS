<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyInTableBookmark extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookmark', function (Blueprint $table) {
            $table->foreign('cafe_id')
                ->references('id')
                ->on('cafe');

            $table->foreign('account_id')
                ->references('id')
                ->on('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookmark', function (Blueprint $table) {
            //
        });
    }
}
