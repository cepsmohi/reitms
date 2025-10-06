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
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->string('sl_no')->unique();
            $table->string('customer_code');
            $table->string('customer_name');
            $table->text('address')->nullable();
            $table->decimal('hourly_load', 10, 2)->nullable();
            $table->decimal('monthly_load', 10, 2)->nullable();
            $table->decimal('min_load', 10, 2)->nullable();
            $table->decimal('pf', 5, 2)->nullable(); // Power factor
            $table->decimal('df', 5, 2)->nullable(); // Demand factor
            $table->decimal('daily_run', 8, 2)->nullable(); // in hours
            $table->decimal('hourly_run', 8, 2)->nullable(); // in hours
            $table->decimal('sec_dep_cash', 12, 2)->nullable();
            $table->decimal('sec_dep_bank', 12, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_details');
    }
};
