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
        Schema::create('jobs_company', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->string('type');
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Assuming category_id references an id in the categories table
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade'); // Correct foreign key syntax
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs_company');
    }
};
