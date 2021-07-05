<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /*
     - id (uuid)
    - mission_id (uuid)
    - title (string)
    - quantity (int)
    - price (int)
    - unity (string)
     
     
     */
    public function up()
    {
        Schema::create('mission_lines', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('quantity');
            $table->integer('price');
            $table->string('unity');
            $table->unsignedBigInteger('mission_id');
            $table->foreign('mission_id')->references('id')->on('missions');
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
        Schema::dropIfExists('mission_lines');
    }
}
