<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // data faker indonesia
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 20; $x++){
 
        	// insert data dummy pegawai dengan faker
        	DB::table('tag')->insert([
                'tag' => $faker->word ,
                'article_id' =>$faker->biasedNumberBetween($min = 1, $max = 10) ,
        	]);
 
        }
    }
}
