<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Database\Factories\UserFactory;
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
         User::factory(1)->create();
         Company::factory(5)->create();
         Employee::factory(20)->create();
    }
}
