<?php

namespace Backpack\Pages\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Backpack\Pages\app\Models\Page;

class PagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Page::factory()
          ->count(30)
          ->create();
    }
}
