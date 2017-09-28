<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafeFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafe_file', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cafe_id')
                ->unsigned();
            $table->integer('file_id')
                ->unsigned();
            $table->enum('type',['gallery','thumbnail']);
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
        Schema::dropIfExists('cafe_file');
    }
}
