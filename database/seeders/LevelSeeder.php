<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Level::count() == 0)
        {
            Level::create([
                'name' => 'ONE'
            ]);
            Level::create([
                'name' => 'TWO'
            ]);
            Level::create([
                'name' => 'THREE'
            ]);

        }
    }
}
