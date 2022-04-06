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
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->references('id')->on('users')
            ->nullable()->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->references('id')->on('courses')
            ->nullable()->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->string('verification_code')->nullable()->unique();    
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
        Schema::dropIfExists('enrolls');
    }
};
