<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyInTableCafe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cafe', function (Blueprint $table) {
            $table->foreign('district_id')
                ->references('id')
                ->on('district');

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
        Schema::table('cafe', function (Blueprint $table) {
            //
        });
    }
}
