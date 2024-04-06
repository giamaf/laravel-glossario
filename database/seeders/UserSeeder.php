<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Danilo Amico',
                'email' => 'danilo@amico.it',
                'email_verified_at' => now(),
                'image' => '',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Erica Marzi',
                'email' => 'erica@marzi.it',
                'email_verified_at' => now(),
                'image' => '',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Amarildo Shehu',
                'email' => 'amarildo@shehu.it',
                'email_verified_at' => now(),
                'image' => '',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Francesco Mongiello',
                'email' => 'francesco@mongiello.it',
                'email_verified_at' => now(),
                'image' => '',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Gianluca Maffucci',
                'email' => 'gianluca@maffucci.it',
                'email_verified_at' => now(),
                'image' => '',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
        ];

        foreach ($users as $user) {
            $new_user = new User();
            $new_user->fill($user);
            $new_user->save();
        }
    }
}
