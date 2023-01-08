<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTypeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_type')->insert([[
            'name' => 'Fert',
           
         
        ], [
            'name' => 'Chem',
              
        ], [
            'name' => 'Seed',
              
        ],
    
    
    ]); 
    }
}
