<?php

use Illuminate\Database\Seeder;
use App\User;

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
            [
                'active' => true,
                'banned' => false,
                'notifiable_email' => true,
                'user_name' => 'aaaaa',
                'email' => 'yyyyyy@mail.com',
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
                'banned' => false,
                'notifiable_email' => false,
                'user_name' => 'ccccccc',
                'email' => 'aaaaaa@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'locationofsavedimage',
                'points' => '92',
                'google_id' => 888888,
                'geo' => 'England',
                'lang' => 'en',
                'ref_code' => 'GC_3',
            ],

            [
                'active' => false,
                'banned' => true,
                'notifiable_email' => true,
                'user_name' => 'ddddd',
                'email' => 'gggggg@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'locationofsavedimage',
                'points' => '824',
                'google_id' => 3333333,
                'geo' => 'Germany',
                'lang' => 'ge',
                'ref_code' => 'GC_4',
            ],

            [
                'active' => false,
                'banned' => true,
                'notifiable_email' => true,
                'user_name' => 'ddddd',
                'email' => 'gggggg@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'loasdgdsaage',
                'points' => '1241244',
                'google_id' => 312512533,
                'geo' => 'Germany',
                'lang' => 'ge',
                'ref_code' => 'GC_4',
            ],

            [
                'active' => false,
                'banned' => true,
                'notifiable_email' => true,
                'user_name' => 'ddddd',
                'email' => 'gggggg@mail.com',
                'password' => 'zaq1@WSX',
                'avatar' => 'locationofsavedimage',
                'points' => '824',
                'google_id' => 3333333,
                'geo' => 'Germany',
                'lang' => 'ge',
                'ref_code' => 'GC_4',
            ],
        ]);
    }
}
