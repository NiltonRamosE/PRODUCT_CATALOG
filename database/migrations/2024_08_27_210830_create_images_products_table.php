<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('images_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('image_id')->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('images_products');
    }
};
