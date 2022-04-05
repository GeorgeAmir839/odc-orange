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
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->float('student_degree', 8, 2);
            $table->float('total_right_degree', 8, 2);
            $table->float('total_wrong_degree', 8, 2);
            $table->foreignId('exam_id')->constrained()->references('id')->on('exams')
            ->nullable()->onDelete('cascade')
            ->onUpdate('cascade'); 
            $table->foreignId('student_id')->constrained()->references('id')->on('users')
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
        Schema::dropIfExists('revisions');
    }
};
