<?php

namespace Database\Seeders;

use App\Models\Undian;
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
        $this->call([
            userSeeder::class
        ]);
        // Undian::factory(100000)->create();
    }
}
