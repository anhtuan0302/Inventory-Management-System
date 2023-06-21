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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignID('supplier_id')->constrained('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('warehouse_id')->constrained('warehouses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantity');
            $table->string('unit');
            $table->double('price');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
