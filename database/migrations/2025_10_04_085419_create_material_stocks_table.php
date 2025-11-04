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
        Schema::create('material_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('material_id')->constrained();
            $table->foreignId('task_id')->nullable();
            $table->string('miv_no')->nullable();
            $table->decimal('stock_in')->default(0.00);
            $table->decimal('stock_out')->default(0.00);
            $table->timestamps();
            $table->string('status')->default('okay');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_stocks');
    }
};
