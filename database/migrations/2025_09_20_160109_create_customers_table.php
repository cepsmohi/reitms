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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            // Codes (use string if alphanumeric, integer if strictly numeric)
            $table->string('code', 64)->unique();

            // Customer info
            $table->string('name')->nullable();
            $table->string('address')->nullable();

            // Loads
            $table->decimal('load_hr', 12, 3)->nullable();
            $table->decimal('load_month', 12, 3)->nullable();
            $table->decimal('min_load', 12, 3)->nullable();

            // Factors
            $table->decimal('pf', 8, 4)->nullable();
            $table->decimal('df', 8, 4)->default(0.80);

            // Runtime
            $table->integer('run_day')->nullable();
            $table->integer('run_hour')->nullable();

            // Security
            $table->decimal('sec_cash', 12)->default(0.00);
            $table->decimal('sec_bg', 12)->default(0.00);

            // Flags
            $table->string('status', 24)->default('active')->index();

            // Location
            $table->decimal('lat', 10, 7)->nullable()->index();
            $table->decimal('lng', 10, 7)->nullable()->index();

            // Path (use text for WKT/GeoJSON, or geometry if PostGIS)
            $table->integer('zone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
