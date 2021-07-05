<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('title');
            $table->string('comment')->nullable();
            $table->string('deposit')->nullable();
            $table->timestamps();
            $table->timestamp('ended_at');
            $table->unsignedBigInteger('organisation_id');
            //
            $table->foreign('organisation_id')->references('id')->on('organisations');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
