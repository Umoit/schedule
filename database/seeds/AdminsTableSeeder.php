<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('admins')->insert([
            'name' => 'Ash',
            'email' => 'ash@qq.com',
            'password' => bcrypt('ash1688'),
        ]);
    }
}
