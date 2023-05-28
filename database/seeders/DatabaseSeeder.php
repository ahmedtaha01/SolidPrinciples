<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->state(new Sequence(
            ['type' => 'superadmin'],
            ['type' => 'admin'],
            ['type' => 'doctor'],
            ['type' => 'radiologist'],
        ))->create();
    }
}
