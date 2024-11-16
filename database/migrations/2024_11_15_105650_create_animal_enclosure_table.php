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
        Schema::create('animal_enclosure', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('animal_id');
            $table->unsignedbigInteger('enclosure_id');

            $table->foreign('animal_id')
                ->references('id')
                ->on('animals')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('enclosure_id')
                ->references('id')
                ->on('enclosure')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_enclosure');
    }
};
