<?php

namespace Database\Seeders;
use App\Models\Event;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            UserSeeder::class,
        ]);
        Event::factory(100)->create();
    }
}
