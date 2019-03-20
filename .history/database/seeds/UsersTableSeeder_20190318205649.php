<?php

use Illuminate\Database\Seeder;

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
                'active' => true,
                'banned' => false,
                'notifiable_email' => false,
                'user_name' => 'examplename',
                'email' => 'examlpeemail@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'locationofsavedimage',
                'points' => '1500',
                'google_id' => 4212773,
                'geo' => 'Poland',
                'lang' => 'pl',
                'ref_code' => 'GC_1',
        ])
    }
}
