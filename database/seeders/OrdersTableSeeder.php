<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'order_id' => 44,
                'time_placed' => '2024-02-08 00:00:00',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            1 => 
            array (
                'order_id' => 45,
                'time_placed' => '2024-02-08 00:00:00',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            2 => 
            array (
                'order_id' => 46,
                'time_placed' => '2024-02-10 09:36:42',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            3 => 
            array (
                'order_id' => 47,
                'time_placed' => '2024-02-10 10:23:51',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            4 => 
            array (
                'order_id' => 48,
                'time_placed' => '2024-02-10 11:01:11',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            5 => 
            array (
                'order_id' => 49,
                'time_placed' => '2024-02-05 23:41:07',
                'status' => 'waiting',
                'user_id' => 5,
            ),
            6 => 
            array (
                'order_id' => 50,
                'time_placed' => '2024-02-11 16:53:13',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            7 => 
            array (
                'order_id' => 51,
                'time_placed' => '2024-02-11 20:17:57',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            8 => 
            array (
                'order_id' => 52,
                'time_placed' => '2024-02-11 20:18:27',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            9 => 
            array (
                'order_id' => 53,
                'time_placed' => '2024-02-11 20:21:23',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            10 => 
            array (
                'order_id' => 54,
                'time_placed' => '2024-02-11 20:21:32',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            11 => 
            array (
                'order_id' => 55,
                'time_placed' => '2024-02-11 20:22:25',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            12 => 
            array (
                'order_id' => 56,
                'time_placed' => '2024-02-11 20:37:30',
                'status' => 'waiting',
                'user_id' => 7,
            ),
        ));
        
        
    }
}