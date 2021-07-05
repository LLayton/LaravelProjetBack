<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("source_type")->nullable();
            $table->unsignedBigInteger("source_id")->nullable();
            $table->integer("price");
            $table->timestamp("paid_at");
            $table->timestamps();
            $table->foreign('source_id')->references('id')->on('organisations');
            $table->foreign('source_type')->references('id')->on('contributions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
