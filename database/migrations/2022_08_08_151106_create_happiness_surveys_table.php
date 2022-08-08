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
        Schema::create('happiness_surveys', function (Blueprint $table) {
            $table->id();
            $table->string("manual_id")->nullable();
            $table->string("name")->nullable();
            $table->string("age")->nullable();
            $table->string("occupation")->nullable();
            $table->string("from")->nullable(); 
            $table->string("q1")->nullable();
            $table->string("q2")->nullable();
            $table->string("q3")->nullable();
            $table->string("q4")->nullable();
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
        Schema::dropIfExists('happiness_surveys');
    }
};
