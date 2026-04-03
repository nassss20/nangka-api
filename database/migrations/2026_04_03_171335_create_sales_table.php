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
    Schema::create('sales', function (Blueprint $table) {
        $table->id();
        $table->date('date');
        $table->foreignId('location_id')->constrained()->onDelete('cascade');
        $table->string('custom_location')->nullable(); // For "Others" option
        $table->integer('production_packs')->default(0);
        $table->integer('actual_packs')->default(0);
        $table->decimal('price', 8, 2)->default(6.99);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
