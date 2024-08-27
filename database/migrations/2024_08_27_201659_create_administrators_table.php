<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('paternal_surname', 20);
            $table->string('maternal_surname', 20);
            $table->string('gender', 9);
            $table->string('work_email', 100)->unique();
            $table->string('password');
            $table->string('recovery_email', 20)->unique()->nullable();
            $table->string('image_admin');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
