<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_galleries', function (Blueprint $table) {
            $table->increments('gallery_id');
            $table->integer('room_id');
            $table->integer('lodge_id');
            $table->string('room_picture');
            $table->string('picture_caption');
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
        Schema::dropIfExists('room_galleries');
    }
}
