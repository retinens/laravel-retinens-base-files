<?php

namespace Database\Seeders;

use Domain\Users\Models\User;
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
        $this->call(RolesAndPermissionsSeeder::class);

        $user = User::create([
            'email' => 'web@retinens.com',
            'first_name' => 'Web',
            'last_name' => 'Admin',
            'password' => bcrypt(Str::random()),
            'type' => 'admin'
        ]);
    }
}
