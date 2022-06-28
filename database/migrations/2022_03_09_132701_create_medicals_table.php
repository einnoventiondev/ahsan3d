<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('myfile')->nullable();
            $table->string('procedure')->nullable();
            $table->string('parts')->nullable();
            $table->longText('discription')->nullable();
            $table->string('pa_age')->nullable();
            $table->string('pa_id')->nullable();
            $table->string('pa_name')->nullable();
            $table->string('hospital')->nullable();
            $table->string('dr_phone')->nullable();
            $table->string('dr_email')->nullable();
            $table->string('dr_spec')->nullable();
            $table->string('dr_name')->nullable();
            $table->integer('status')->defult(1);
            $table->integer('seen')->default(0);
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
        Schema::dropIfExists('medicals');
    }
}
