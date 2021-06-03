<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('songs', function (Blueprint $table) {
      $table->id();
      $table->timestamps();

      $table->string('title')->index();
      $table->year('year_released');

      $table->foreignId('album_id')->constrained();
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
    Schema::dropIfExists('songs');
  }
}
