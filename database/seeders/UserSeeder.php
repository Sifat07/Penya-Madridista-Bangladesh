<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=>bcrypt('12345678'),
                'is_admin'=> 0
            ],[
                'name'=>'user2',
                'email'=>'user2@gmail.com',
                'password'=>bcrypt('12345678'),
                'is_admin'=> 0
            ],[
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('12345678'),
                'is_admin'=> 1
            ]
        ];
        DB::table('users')->insert($data);
    }
}
