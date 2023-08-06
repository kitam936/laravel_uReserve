<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{

    public function run()
    {
        DB::table('reservations')->insert([
            [
            'user_id'=>1,
            'event_id'=>1,
            'number_of_people'=>2,
            'canceled_date'=>null,
            ],
            [
            'user_id'=>2,
            'event_id'=>1,
            'number_of_people'=>3,
            'canceled_date'=>null,
            ],
            [
            'user_id'=>1,
            'event_id'=>2,
            'number_of_people'=>2,
            'canceled_date'=>null,
            ],
            [
            'user_id'=>1,
            'event_id'=>2,
            'number_of_people'=>2,
            'canceled_date'=>'2023-07-26 10:00:00',
            ],

        ]);
    }
}
