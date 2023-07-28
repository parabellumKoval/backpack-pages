<?php

namespace Backpack\Pages\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Backpack\Pages\app\Models\Page;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $langs = array_keys(config('backpack.crud.locales', ['en' => 'English']));
      //dd($langs);
      return [
        'lang' => $this->faker->randomElement(['ru', 'en']),
        'title' => $this->faker->sentence(5),
        'slug' => $this->faker->uuid(),
        'excerpt' => $this->faker->paragraph(1, false),
        'content' => $this->faker->text(2000),
        'image' => $this->faker->imageUrl(640, 480, 'article', true),
      ];
    }

}
