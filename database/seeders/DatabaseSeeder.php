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
        (new ArtistSeeder())->run();
        //$this->call([ArtistSeeder::class]); //probably should do this better

        (new ProductSeeder())->run();

        // \App\Models\User::factory(10)->create();
    }
}
