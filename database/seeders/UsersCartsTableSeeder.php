<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersCartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_carts')->delete();
        
        \DB::table('users_carts')->insert(array (
            0 => 
            array (
                'uc_id' => 65,
                'product_id' => 1,
                'quantity' => 9,
                'user_id' => 7,
                'order_id' => 44,
            ),
            1 => 
            array (
                'uc_id' => 66,
                'product_id' => 9,
                'quantity' => 4,
                'user_id' => 7,
                'order_id' => 44,
            ),
            2 => 
            array (
                'uc_id' => 67,
                'product_id' => 14,
                'quantity' => 3,
                'user_id' => 7,
                'order_id' => 45,
            ),
            3 => 
            array (
                'uc_id' => 68,
                'product_id' => 21,
                'quantity' => 1,
                'user_id' => 7,
                'order_id' => 45,
            ),
            4 => 
            array (
                'uc_id' => 69,
                'product_id' => 8,
                'quantity' => 8,
                'user_id' => 7,
                'order_id' => 46,
            ),
            5 => 
            array (
                'uc_id' => 70,
                'product_id' => 1,
                'quantity' => 3,
                'user_id' => 7,
                'order_id' => 46,
            ),
            6 => 
            array (
                'uc_id' => 71,
                'product_id' => 5,
                'quantity' => 3,
                'user_id' => 5,
                'order_id' => 47,
            ),
            7 => 
            array (
                'uc_id' => 72,
                'product_id' => 6,
                'quantity' => 5,
                'user_id' => 5,
                'order_id' => 47,
            ),
            8 => 
            array (
                'uc_id' => 73,
                'product_id' => 9,
                'quantity' => 11,
                'user_id' => 7,
                'order_id' => 50,
            ),
            9 => 
            array (
                'uc_id' => 74,
                'product_id' => 9,
                'quantity' => 1,
                'user_id' => 7,
                'order_id' => 52,
            ),
            10 => 
            array (
                'uc_id' => 75,
                'product_id' => 2,
                'quantity' => 1,
                'user_id' => 7,
                'order_id' => 52,
            ),
            11 => 
            array (
                'uc_id' => 76,
                'product_id' => 3,
                'quantity' => 3,
                'user_id' => 8,
                'order_id' => 53,
            ),
            12 => 
            array (
                'uc_id' => 77,
                'product_id' => 1,
                'quantity' => 2,
                'user_id' => 7,
                'order_id' => 54,
            ),
        ));
        
        
    }
}