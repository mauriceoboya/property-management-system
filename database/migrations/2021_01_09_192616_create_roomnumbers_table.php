<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomnumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomnumbers', function (Blueprint $table) {
            $table->id();
            $table->string('roomnumber');
            $table->integer('roomtype_id');
            $table->foreign('roomtype_id')->references('id')->on('roomtype');
            $table->softDeletes();
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
        Schema::dropIfExists('roomnumbers');
    }
}
