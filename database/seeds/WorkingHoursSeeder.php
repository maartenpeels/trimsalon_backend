<?php

use Illuminate\Database\Seeder;

class WorkingHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('working_hours')->insert([
            'day'        => 0,
            'start_time' => '09:00',
            'stop_time'  => '16:30',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
