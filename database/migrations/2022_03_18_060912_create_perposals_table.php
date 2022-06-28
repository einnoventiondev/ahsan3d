<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perposals', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('validtill')->nullable();
            $table->integer('qty_design')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('qty_model')->default(0);
            $table->integer('price_design')->default(0);
            $table->integer('price_model')->default(0);
            $table->integer('tax')->default(0);
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
        Schema::dropIfExists('perposals');
    }
}
