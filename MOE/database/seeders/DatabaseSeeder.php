<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            StateSeeder::class,
            CitySeeder::class,
            UniversitySeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
            CompanySeeder::class,
            CourseCoordinatorSeeder::class,
            AdminSeeder::class,
            InternshipSeeder::class,
        ]);

    }
}
