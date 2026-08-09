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
            $table -> foreignId('classId')->nullable()->constrained('classes')->nullOnDelete();
            // $table -> unsignedBigInteger('classId');
            $table -> string('firstName');
            $table->string('middleName')->nullable();
            $table -> string('surname');
            $table -> string('email')->unique();
            $table -> string('password');
            $table->string('contact');
            $table->string('parentContact');
            $table -> string('address');
            $table->timestamps();
            $table -> softDeletes();
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
