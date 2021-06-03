<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('albums', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      $table->string('title')->index();
      $table->string('produced_by')->index();

      $table->year('year_released');

      $table->foreignId('artist_id')->constrained();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('albums');
  }
}
