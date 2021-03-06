<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizze', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("pizze");
            $table->text("img");
            $table->float("price");
            $table->text("impasto");
            $table->text("allergeni");
            $table->text("description");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizze');
    }
}
