<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('district_id')
                ->unsigned();
            $table->string('fullname', 255);
            $table->enum('gender',['male','female']);
            $table->dateTime('dob');
            $table->text('address');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->enum('status',['pending','active','banned']);
            $table->enum('type',['admin','user']);
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
        Schema::dropIfExists('account');
    }
}
