<?php

use Illuminate\Database\Seeder;

class articlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      
        $faker =Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 10; $i++) {
        DB::table('articles')->insert([
            'Name' => $faker->name(),
            'Decription' => $faker->name(20),
        ]);
        }
    }
}