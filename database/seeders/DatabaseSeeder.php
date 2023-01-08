<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\productUnit;
use Illuminate\Database\Seeder;
use Database\Seeders\Supplierseeder;
use Database\Seeders\ProductTypeseeder;
use Database\Seeders\ProductUnitseeder;

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
            AccountSeeder::class,

            ProductTypeseeder::class,
            ProductUnitseeder::class,
            Supplierseeder::class,
            


        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}



