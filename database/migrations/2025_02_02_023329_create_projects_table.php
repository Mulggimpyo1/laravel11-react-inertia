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
        Schema::create('projects', function (Blueprint $table) {
            /*
            projects DB 생성
                - name
                - description
                - due_date
                - status
                - image_path
                - created_by
                - updated_by
             */
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->string('status');
            $table->string('image_path')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
