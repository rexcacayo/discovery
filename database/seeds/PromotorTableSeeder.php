<?php

use Illuminate\Database\Seeder;

class PromotorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotores')->insert([
            'name' => 'Rex',
            'area' => 'ventas',
            'created_at' => '2019-04-20 10:17:57',
            'updated_at' => '2019-04-20 10:17:57'
        ]);
    }
}
