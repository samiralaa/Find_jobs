<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    public function run()
    {
        // Generate fake data using Faker
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('companies')->insert([
                'name' => $faker->company,
                'email' => $faker->unique()->safeEmail,
                'logo' => $faker->imageUrl(100, 100, 'business', true, 'Faker'),
                'website' => $faker->url,
                'industry' => $faker->word,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'description' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
