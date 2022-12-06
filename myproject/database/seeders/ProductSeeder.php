<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Generator as Faker;


class ProductSeeder extends Seeder
{
    public function run(Faker $faker){
        // \DB::table('product')->insert([
            for ($i=0; $i <10 ; $i++) { 
                DB::table('product')->insert([
                    'title' =>  $faker->city,
                    'price' => $faker->numberBetween($min = 500, $max = 8000),
                    'quantity' => rand(10,1000),
                    'description' => $faker->paragraph($nb =2),
                    'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                ]);
            }
    }
}
