<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'working_hours_id' => 1,
            'user_type_id'     => \App\UserType::where('name', 'regular')->first()->id,
            'first_name'       => 'Maarten',
            'middle_name'      => '',
            'last_name'        => 'Peels',
            'email'            => 'maartenpeels@gmail.com',
            'password'         => bcrypt('secret'),
            'created_at'       => \Carbon\Carbon::now(),
            'updated_at'       => \Carbon\Carbon::now()
        ]);
    }
}
