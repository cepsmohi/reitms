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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            //type: rms installation, rms maintenance, rms layoff, rms dc, meter test, meter sealing
            $table->string('type');
            //status: pending, checked, approved
            $table->string('status')->default('reporting');
            $table->bigInteger('checked_by')->nullable();
            $table->bigInteger('approved_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
