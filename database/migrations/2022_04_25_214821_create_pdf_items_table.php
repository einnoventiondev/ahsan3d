<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_items', function (Blueprint $table) {
            $table->id();
            $table->string('model')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('rate')->nullable();
            $table->bigInteger('tax')->nullable();
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
        Schema::dropIfExists('pdf_items');
    }
}
