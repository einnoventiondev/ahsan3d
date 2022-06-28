<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('email')->nullable();
            $table->string('specialization')->nullable();
            $table->string('gender')->nullable();
            // form2 public service
            $table->string('print_type')->nullable();
            $table->string('print_color')->nullable();
            $table->string('print_resolution')->nullable();
            $table->string('print_img')->nullable();
            $table->integer('status')->default(1);
            $table->integer('seen')->default(0);
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
        Schema::dropIfExists('public_services');
    }
}
