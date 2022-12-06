<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Generator as Faker;


class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        // \DB::table('product')->insert([
            for ($i=0; $i <10 ; $i++) { 
                DB::table('categories')->insert([
                    'category_title' =>  $faker->city,
                    'category_description' => $faker->paragraph($nb =2),
                    'category_image' =>$faker->image(null, 640, 480),
                    'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                ]);
            }
    }
}
