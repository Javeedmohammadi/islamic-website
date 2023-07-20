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
        Schema::create('person_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('person_id') -> unique();
            $table->text('answer');
            $table->text('answerBy');
            $table->foreign('person_id')
                -> references('id')
                -> on('people')
                -> onDelete('cascade')
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_details');
    }
};
