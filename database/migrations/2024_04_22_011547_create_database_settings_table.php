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
    Schema::create('database_settings', function (Blueprint $table) {
      $table->id();
      $table->foreignId('database_id')->constrained();
      $table->smallInteger('status', false, true);
      $table->boolean('manual_approval');
      $table->json('privileges');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('database_settings');
  }
};
