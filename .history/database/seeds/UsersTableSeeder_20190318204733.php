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
            [
                'active' => true,
                'banned' => 'aaaa',
                'notifiable_email' => 'aaaa',
                'user_name' => 'aaaa',
                'email' => 'aaaa',
                'password' => 'aaaa',
                'avatar' => 'aaaa',
                'points' => 'aaaa',
                'steam_id' => 'aaaa',
                'facebook_id' => 'aaaa',
                'google_id' => 'aaaa',
                'geo' => 'aaaa',
                'lang' => 'aaaa',
                'ref' => 'aaaa',
                'ref_status' => 'aaaa',
                'ref_code' => 'aaaa',
                'deleted_at' => 'aaaa'
            ],
    }
}
