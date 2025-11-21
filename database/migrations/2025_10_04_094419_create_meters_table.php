<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('material_id')->nullable()->constrained()->nullOnDelete();
            $table->string('number')->unique();
            $table->string('type');
            $table->string('manufacturer')->nullable();
            $table->string('model')->nullable();
            $table->string('year')->nullable();
            $table->string('diameter')->nullable();
            $table->string('status')->default('stock');
            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meters');
    }
};
