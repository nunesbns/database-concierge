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
    Schema::create('databases', function (Blueprint $table) {
      $table->id();
      $table->string('host');
      $table->string('database');
      $table->string('username');
      $table->string('password');
      $table->string('type');
      $table->smallInteger('port');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('databases');
  }
};
