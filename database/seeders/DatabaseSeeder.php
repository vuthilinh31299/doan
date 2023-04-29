<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('123123'),
        //     'is_admin' => 1,
        // ]);
        if(DB::table('users')->count() == 0){

            DB::table('users')->insert([

                [
                    'name' => 'Administrator',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('123132'),
                    'phone' =>'099999',
                    'sex' =>'Male',
                    'address' =>'address',
                    'level_study' =>'highshool',
                    'history' =>'history',
                    'avatar' =>'',
                    'is_admin' =>1,
                    'is_voters' =>0,
                    'date_of_birth' => date('Y-m-d H:i:s'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'cutri_1',
                    'email' => 'cutri_1@gmail.com',
                    'password' => bcrypt('132123'),
                    'phone' =>'099999',
                    'sex' =>'Male',
                    'address' =>'address',
                    'level_study' =>'highshool',
                    'history' =>'history',
                    'avatar' =>'',
                    'is_admin' =>1,
                    'is_voters' =>0,
                    'date_of_birth' => date('Y-m-d H:i:s'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'cutri_2',
                    'email' => 'cutri_2@gmail.com',
                    'password' => bcrypt('132123'),
                    'phone' =>'099999',
                    'sex' =>'FeMale',
                    'address' =>'address',
                    'level_study' =>'highshool',
                    'history' =>'history',
                    'avatar' =>'',
                    'is_admin' =>1,
                    'is_voters' =>0,
                    'date_of_birth' => date('Y-m-d H:i:s'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'cutri_3',
                    'email' => 'cutri_3@gmail.com',
                    'password' => bcrypt('132123'),
                    'phone' =>'099999',
                    'sex' =>'Male',
                    'address' =>'address',
                    'level_study' =>'highshool',
                    'history' =>'history',
                    'avatar' =>'',
                    'is_admin' =>1,
                    'is_voters' =>0,
                    'date_of_birth' => date('Y-m-d H:i:s'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'cutri_4',
                    'email' => 'cutri_4@gmail.com',
                    'password' => bcrypt('132123'),
                    'phone' =>'099999',
                    'sex' =>'Male',
                    'address' =>'address',
                    'level_study' =>'highshool',
                    'history' =>'history',
                    'avatar' =>'',
                    'is_admin' =>1,
                    'is_voters' =>0,
                    'date_of_birth' => date('Y-m-d H:i:s'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
      
    }
}
