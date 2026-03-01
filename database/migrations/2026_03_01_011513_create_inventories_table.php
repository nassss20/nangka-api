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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('kg', 8, 2); // 8 digits total, 2 after decimal
            $table->integer('total_packs');
            $table->integer('display_packs');
            $table->integer('rejected_amount')->default(0);
            $table->string('rejected_unit')->default('Packs'); // 'Packs' or 'Kg'
            $table->integer('balance_packs');
            $table->decimal('purchase_rm', 10, 2)->default(0.00);
            $table->decimal('sales_rm', 10, 2)->default(0.00);
            $table->timestamps(); // Automatically adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
