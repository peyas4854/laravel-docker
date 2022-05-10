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
//         \App\Models\Post::factory(50000)->create();
//         \App\Models\Student::factory(20000)->create();
//         $this->call(PermissionTableSeeder::class);
         $this->call(AdminUserSeeder::class);
    }
}
