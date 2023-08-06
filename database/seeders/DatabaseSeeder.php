<?php

namespace Database\Seeders;
use App\Models\Event;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Event::factory(100)->create();

        $this->call([
            UserSeeder::class,
            ReservationSeeder::class,
        ]);
    }
}
