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
            BreaksTableSeeder::class,
            ComputersTableSeeder::class,
            DepartmentsTableSeeder::class,
            RequestsTableSeeder::class,
            FollowedUpRequestsTableSeeder::class,
            VerifiedRequestsTableSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
