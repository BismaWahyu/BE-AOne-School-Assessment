<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "email" => 'george.bluth@reqres.in',
                "first_name" => 'George',
                "last_name" => 'Bluth',
                "avatar" => 'https://reqres.in/img/faces/1-image.jpg',
            ],
            [
                "email"=> "janet.weaver@reqres.in",
                "first_name"=> "Janet",
                "last_name"=> "Weaver",
                "avatar"=> "https://reqres.in/img/faces/2-image.jpg",
            ],
            [
                "email"=> "emma.wong@reqres.in",
                "first_name"=> "Emma",
                "last_name"=> "Wong",
                "avatar"=> "https://reqres.in/img/faces/3-image.jpg",
            ]
        ];

        DB::table('users')->insert($users);
    }
}
