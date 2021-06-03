<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

// $table->string('name')->index();
// $table->string('from_country');
// $table->year('formed_in');
class ArtistFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Artist::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      //
      'name' => $this->faker->unique()->company(),
      'from_country' => $this->faker->country(),
      'formed_in' => $this->faker->year()
    ];
  }
}
