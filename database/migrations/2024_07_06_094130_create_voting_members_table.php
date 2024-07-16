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
        Schema::create('voting_members', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('author');
            $table->text('images');
            $table->text('music')->nullable();;
            $table->integer('votes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting_members');
    }
};
