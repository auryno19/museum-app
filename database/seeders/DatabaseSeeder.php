<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(CollectionSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CoverSeeder::class);
    }
}
