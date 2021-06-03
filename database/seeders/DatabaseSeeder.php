<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Song;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();
    // Artist::factory(5)
    //   ->has(Album::factory(2))
    $artists = Artist::factory(5)
      ->hasAlbums(3, function (array $attr, Artist $artist) {
        return ['artist_id' => $artist->id];
      })
      ->create();

    foreach (Album::all() as $album) {
      Song::factory(8)
        ->state([
          'album_id' => $album->id,
          'artist_id' => $album->artist->id
        ])
        ->create();
    }
    // $artist->albums()->saveMany(Album::factory(3)->create());
  }
}
