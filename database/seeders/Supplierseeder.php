<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Supplierseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([[
            'name' => 'Malawi Fertlizer company',
           
         
        ], [
            'name' => 'Agricultural Trading Company',
              
        ], [
            'name' => 'Seedco',
              
        ], [
            'name' => 'Farmers World',
              
        ],
    
    
    ]);  
    }
}
