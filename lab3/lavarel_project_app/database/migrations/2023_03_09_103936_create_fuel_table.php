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
        Schema::create('fuels', function (Blueprint $table) {
            $table->id();
            $table->string('brand',30);
            $table->integer('amount');
            $table->float('price');

            $table->bigInteger('station_id')
                ->unsigned()
                ->nullable(false);

            $table->timestamps();

            $table->foreign('station_id')
                ->references ('id')
                ->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuels');
    }
};
