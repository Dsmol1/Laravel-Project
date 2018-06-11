<?php

use App\Dish;
use App\Main;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DishesSeeder extends Seeder
{
  protected $faker;
  protected $dish;
  protected $main;

  public function __construct(Faker $faker, Dish $dish, Main $main){
    $this->dish = $dish;
    $this->faker = $faker;
    $this->main = $main;

  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = $this->faker->create();

      $main_id = $this->main->pluck('id');

      foreach(range(1,10) as $index){
        $this->dish->create([
        'title' => $faker->word(),
        'description' => $faker->text($maxNbChars = 200),
        'image' => $faker->imageUrl(600, 600, 'food'),
        'price' => $faker->randomDigit(),
        'main_id' => $main_id->random()
      ]);
      }
    }
}
