<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempUpdateProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_update_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('profile')->nullable();
            $table->string('printing_technology')->nullable();
            $table->string('software_type')->nullable();
            $table->string('password')->nullable();
            $table->string('field')->nullable();
            $table->string('role')->nullable();
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('temp_update_profiles');
    }
}
