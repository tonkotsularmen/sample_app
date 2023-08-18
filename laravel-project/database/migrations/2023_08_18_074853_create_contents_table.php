<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("user_id")->unsigned()->nullable();
            $table->integer("star");
            $table->string("gym_name");
            $table->string("gym_address");
            $table->integer("gym_tel_number");
            $table->string("gym_clean");
            $table->string("gym_staff");
            $table->integer("gym_user");
            $table->integer("gym_beginner");
            $table->string("memo");
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
        Schema::dropIfExists('contents');
    }
}
