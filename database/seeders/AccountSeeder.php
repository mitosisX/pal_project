<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ([[
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone_number' => fake()->phoneNumber(),
            'role' => 'admin',
            'email' => 'admin@pa.l',
            // fake()->email()
            'password' => bcrypt('password')
        ], [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'phone_number' => fake()->phoneNumber(),
            'role' => 'manager',
            'email' => 'farmer@pa.l',
            // fake()->email()
            'password' => bcrypt('password')
        ]] as $account) {
            DB::table('users')
                ->insert($account);
        }
    }
}
