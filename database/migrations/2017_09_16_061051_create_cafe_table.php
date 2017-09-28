<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('district_id')
                ->unsigned();
            $table->integer('account_id')
                ->unsigned();
            $table->string('name', 255);
            $table->text('address');
            $table->text('maps')
                ->comment('Google Maps URL')
                ->nullable();
            $table->integer('start_price');
            $table->integer('end_price');
            $table->time('open_hour');
            $table->time('close_hour');
            $table->text('notes');
            $table->enum('status',['draft','on_schedule','publish']);
            $table->dateTime('publish_time');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafe');
    }
}
