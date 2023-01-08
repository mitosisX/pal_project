<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductUnitseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_unit')->insert([[
            'name' => 'kg',
           
         
        ], [
            'name' => 'ltr',
              
        ], [
            'name' => 'gram',
              
        ],
    
    
    ]);  
    }
}
