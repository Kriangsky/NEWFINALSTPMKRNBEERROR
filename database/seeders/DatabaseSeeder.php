<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('tb_leader_details')->insert([
                'user_id' => $faker->numberBetween(1, 100),
                'group_name' => $faker->name,
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'whatsapp' => $faker->phoneNumber,
                'line' => $faker->userName,
                'github' => $faker->userName,
                'birth_date' => $faker->date,
                'birth_place' => $faker->city,
                'is_binusian' => $faker->boolean,
                'cv' => $faker->url,
                'flazz_card' => $faker->optional()->creditCardNumber,
                'id_card' => $faker->optional()->isbn10,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
