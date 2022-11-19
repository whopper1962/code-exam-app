<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exam_id');
            $table->string('title');
            $table->string('content');
            $table->string('default_code')->nullable();
            // $table->string('created_by_id')->nullable();
            // $table->string('updated_by_id')->nullable();
            $table->timestamps();

            // Foreign
            $table->foreign('exam_id')
                ->references('id')
                ->on('exams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
