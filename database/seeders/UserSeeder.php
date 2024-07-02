<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = [
            'name' => 'AdminIndahLogistikConcat',
            'email' => 'admin@indahlogistikconcat.com',
            'password' => bcrypt('concat999'),
        ];

        User::create($user);
    }
}
