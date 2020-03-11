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
        for($i=0;$i<5;$i++){
            DB::table('users')->insert([
                'name' => Str::random(4),
                'email' => Str::random(4). '@email.com',
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
