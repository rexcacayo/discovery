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
            'name' => 'Ricardo Lugaresi',
            'email' => 'rflugaresir@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => '2019-04-20 10:17:57',
            'updated_at' => '2019-04-20 10:17:57'
        ]);
    }
}
