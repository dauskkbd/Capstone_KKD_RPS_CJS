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
                'product_id' => 1,
                'quantity' => 6,
                'user_id' => 7,
                'order_id' => 46,
            ),
            5 => 
            array (
                'uc_id' => 70,
                'product_id' => 5,
                'quantity' => 5,
                'user_id' => 7,
                'order_id' => 46,
            ),
            6 => 
            array (
                'uc_id' => 71,
                'product_id' => 16,
                'quantity' => 10,
                'user_id' => 7,
                'order_id' => 46,
            ),
            7 => 
            array (
                'uc_id' => 72,
                'product_id' => 23,
                'quantity' => 4,
                'user_id' => 7,
                'order_id' => 47,
            ),
            8 => 
            array (
                'uc_id' => 73,
                'product_id' => 13,
                'quantity' => 3,
                'user_id' => 7,
                'order_id' => 47,
            ),
            9 => 
            array (
                'uc_id' => 74,
                'product_id' => 8,
                'quantity' => 4,
                'user_id' => 7,
                'order_id' => 47,
            ),
            10 => 
            array (
                'uc_id' => 75,
                'product_id' => 7,
                'quantity' => 2,
                'user_id' => 7,
                'order_id' => 47,
            ),
            11 => 
            array (
                'uc_id' => 76,
                'product_id' => 1,
                'quantity' => 5,
                'user_id' => 7,
                'order_id' => 47,
            ),
            12 => 
            array (
                'uc_id' => 77,
                'product_id' => 14,
                'quantity' => 4,
                'user_id' => 7,
                'order_id' => 47,
            ),
            13 => 
            array (
                'uc_id' => 78,
                'product_id' => 2,
                'quantity' => 4,
                'user_id' => 7,
                'order_id' => 48,
            ),
            14 => 
            array (
                'uc_id' => 79,
                'product_id' => 5,
                'quantity' => 2,
                'user_id' => 7,
                'order_id' => 48,
            ),
            15 => 
            array (
                'uc_id' => 80,
                'product_id' => 1,
                'quantity' => 4,
                'user_id' => 7,
                'order_id' => 50,
            ),
            16 => 
            array (
                'uc_id' => 81,
                'product_id' => 15,
                'quantity' => 3,
                'user_id' => 5,
                'order_id' => 49,
            ),
            17 => 
            array (
                'uc_id' => 82,
                'product_id' => 25,
                'quantity' => 4,
                'user_id' => 5,
                'order_id' => 49,
            ),
            18 => 
            array (
                'uc_id' => 83,
                'product_id' => 2,
                'quantity' => 4,
                'user_id' => 7,
                'order_id' => 50,
            ),
            19 => 
            array (
                'uc_id' => 84,
                'product_id' => 7,
                'quantity' => 3,
                'user_id' => 7,
                'order_id' => 50,
            ),
            20 => 
            array (
                'uc_id' => 85,
                'product_id' => 2,
                'quantity' => 1,
                'user_id' => 7,
                'order_id' => 51,
            ),
            21 => 
            array (
                'uc_id' => 86,
                'product_id' => 3,
                'quantity' => 1,
                'user_id' => 7,
                'order_id' => 52,
            ),
            22 => 
            array (
                'uc_id' => 87,
                'product_id' => 7,
                'quantity' => 5,
                'user_id' => 7,
                'order_id' => 54,
            ),
            23 => 
            array (
                'uc_id' => 88,
                'product_id' => 31,
                'quantity' => 11,
                'user_id' => 7,
                'order_id' => 55,
            ),
            24 => 
            array (
                'uc_id' => 89,
                'product_id' => 1,
                'quantity' => 3,
                'user_id' => 7,
                'order_id' => 56,
            ),
            25 => 
            array (
                'uc_id' => 90,
                'product_id' => 28,
                'quantity' => 3,
                'user_id' => 7,
                'order_id' => 56,
            ),
            26 => 
            array (
                'uc_id' => 91,
                'product_id' => 9,
                'quantity' => 3,
                'user_id' => 7,
                'order_id' => 56,
            ),
        ));
        
        
    }
}