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
    Schema::create('requests', function (Blueprint $table) {
      $table->id();
      $table->foreignId('db_user_id')->constrained();
      $table->string('description');
      $table->string('task_link')->nullable();
      $table->json('privileges');
      $table->tinyInteger('status', false, true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('requests');
  }
};
