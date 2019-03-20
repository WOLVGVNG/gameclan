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
        DB::table('users')->insert(
            [
                'active' => true,
                'banned' => false,
                'notifiable_email' => true,
                'user_name' => 'aaaaa',
                'email' => 'bbbbb@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'locationofsavedimage',
                'points' => '1500',
                'google_id' => 7777777,
                'geo' => 'Poland',
                'lang' => 'pl',
                'ref_code' => 'GC_1',
            ],

            [
                'active' => false,
                'banned' => true,
                'notifiable_email' => false,
                'user_name' => 'bbbbb',
                'email' => 'cccccc@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'locationofsavedimage',
                'points' => '9182',
                'google_id' => 444444,
                'geo' => 'Netherland',
                'lang' => 'nl',
                'ref_code' => 'GC_2',
            ],

            [
                'active' => true,
                'banned' => true,
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
            ],

            [
                'active' => false,
                'banned' => false,
                'notifiable_email' => true,
                'user_name' => 'examplename',
                'email' => 'examlpeemail@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'locationofsavedimage',
                'points' => '1500',
                'google_id' => 4212773,
                'geo' => 'Poland',
                'lang' => 'pl',
                'ref_code' => 'GC_1',
            ],
    }
}
