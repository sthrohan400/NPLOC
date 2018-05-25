<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        DB::table('users')->insert([
                'company_id' => 1,
                'name' => $faker->name,
	            'username' => $faker->unique()->username,
                'email' => $faker->unique()->email,
                // 'profile_image' => $faker->image('public/uploads/profile',400,300, null, false),
                'password' => bcrypt('secret'),
                'status' => 1,
                'verified' => 1
             ]);
        }
        DB::table('users')->insert([
            'company_id' => 1,
            'username' => 'nepuzz',
            'name' => 'Nepuzz Solutions',
            'email' => 'info@nepuzz.com',
            'profile_image' => '',
            'password' => bcrypt('121212'),
            'status' => 1,
            'verified' => 1
         ]);
    }

}
