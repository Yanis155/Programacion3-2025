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
        Schema::create('apiuser', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->date('dob');
            $table->integer('phone');
            $table->integer('cell');
            $table->string('id_name');
            $table->string('id_number');
            $table->date('registered_date');
            $table->string('gender');
            $table->string('picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apiuser');
    }
};
