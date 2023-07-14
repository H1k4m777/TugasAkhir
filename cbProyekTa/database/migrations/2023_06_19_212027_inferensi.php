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
        Schema::create('inferensi', function (Blueprint $table) {
            $table->id();
            $table->string('game', 9)->nullable();
            $table->string('edit', 9)->nullable();
            $table->string('office', 9)->nullable();
            $table->string('programming', 9)->nullable();
            $table->string('then', 8)->nullable();
            $table->float('nilai', 8)->nullable();
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
        Schema::dropIfExists('inferensi');
    }
};
