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
        Schema::create('rongquestions', function (Blueprint $table) {
            $table->id();
            $table->string('question_answer');    
            $table->foreignId('question_id')->constrained()->references('id')->on('questions')
            ->nullable()->onDelete('cascade')
            ->onUpdate('cascade'); 
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
        Schema::dropIfExists('rongquestions');
    }
};
