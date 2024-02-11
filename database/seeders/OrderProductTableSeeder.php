<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_product')->delete();
        
        \DB::table('order_product')->insert(array (
            0 => 
            array (
                'op_id' => 10,
                'order_id' => 11,
                'product_id' => 1,
                'quantity' => 4,
            ),
            1 => 
            array (
                'op_id' => 11,
                'order_id' => 12,
                'product_id' => 3,
                'quantity' => 3,
            ),
        ));
        
        
    }
}