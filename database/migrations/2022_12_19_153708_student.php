<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table){
<<<<<<< HEAD
            $table->uuid('id')->unique();
=======
            $table->id();
>>>>>>> c18e4887bfc58ae84306a51d98997b1c9095eebb
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
<<<<<<< HEAD
            $table->uuid('program_id');
=======
            $table->unsignedBigInteger('program_id');
>>>>>>> c18e4887bfc58ae84306a51d98997b1c9095eebb
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade')->onUpdate('cascade');
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
        //
        Schema::dropIfExists('students');
    }
};
