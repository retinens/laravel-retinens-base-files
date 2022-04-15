<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = \Domain\Users\Models\User::create([
            'email' => 'web@retinens.com',
            'first_name' => 'Web',
            'last_name' => 'Admin',
            'password' => bcrypt(Str::random()),
            'type' => 'admin'
        ]);
    }
}
