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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table -> foreignId('classId')->constrained('classes')->cascadeOnDelete();
            // $table -> unsignedBigInteger('classId');
            $table -> string('firstName');
            $table->string('middleName');
            $table -> string('surname');
            $table -> string('email');
            $table -> string('password');
            $table->string('contact');
            $table->string('parentContact');
            $table -> string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
