<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class deliveryJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('delivery_jobs')->insert([[
            'description' => 'Transfer Fertilzers to estate 01',
            'type' =>'Fert' ,
            'unit' => 'KG',
            'quantity' => 10000,
            'status' => 'pending',
            'drivers_id' => '01',
            'items_id' => '01',
            'estates_id' => '01',
         
        ], [
            'description' => 'Transfer Chemicals to estate 03',
            'type' =>'Chem',
            'unit' => 'LTR',
            'quantity' => 40,
            'status' => 'pending',
            'drivers_id' => '02',
            'items_id' => '03',
            'estates_id' => '03',
            
        ]]); 
    }
}
