<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('designer_id')->nullable();
            $table->string('images')->nullable();
            $table->string('print_technology')->nullable();
            $table->string('user_software')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->integer('status')->nullable();
           
            $table->integer('verify')->nullable();
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
        Schema::dropIfExists('products');
    }
}
