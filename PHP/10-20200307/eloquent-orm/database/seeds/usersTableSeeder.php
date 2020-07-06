<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $faker =Faker\Factory::create('vi_VN');
        for ($i = 0; $i < 30; $i++) {
        DB::table('users')->insert([
            'Name' => $faker->name(),
            'Email' => $faker->email(),
            'password' =>bcrypt(12333333334),
        ]);
        }
    }
}
