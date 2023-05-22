<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('successes', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->integer('mark',100);
            $table->string('date',100);
            $table->bigInteger('student_id')
                ->unsigned()
                ->nullable(false);

            $table->timestamps();

            $table->foreign('student_id')
                ->references ('id')
                ->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('successes');
    }
};
