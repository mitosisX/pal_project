<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('request_categories')->insert([[
            'name' => 'normal',

            'description' => 'for normal requests',
           
         
        ], [
            'name' => 'Emergency',

            'description' => 'for Emergency',
              
        ]
    
    
    ]); 
    }
}
