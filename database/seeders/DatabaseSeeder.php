<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'email'=>'mohamed',
            'user_type'=>'admin',
            'password'=>Hash::make('mohamed@admin'),
        ]);

        \App\Models\User::create([
            'email'=>'hasen',
            'user_type'=>'normal',
            'password'=>Hash::make('hasen'),
        ]);
    }
}
