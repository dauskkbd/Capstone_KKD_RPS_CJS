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
                'time_placed' => '2024-02-08 10:58:35',
                'status' => 'accepted',
                'user_id' => 7,
            ),
            1 => 
            array (
                'order_id' => 45,
                'time_placed' => '2024-02-08 10:58:56',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            2 => 
            array (
                'order_id' => 46,
                'time_placed' => '2024-02-12 10:01:23',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            3 => 
            array (
                'order_id' => 47,
                'time_placed' => '2024-02-11 10:02:09',
                'status' => 'waiting',
                'user_id' => 5,
            ),
            4 => 
            array (
                'order_id' => 48,
                'time_placed' => '2024-02-12 10:04:46',
                'status' => 'waiting',
                'user_id' => 5,
            ),
            5 => 
            array (
                'order_id' => 49,
                'time_placed' => '2024-02-12 10:06:31',
                'status' => 'waiting',
                'user_id' => 5,
            ),
            6 => 
            array (
                'order_id' => 50,
                'time_placed' => '2024-02-12 10:10:25',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            7 => 
            array (
                'order_id' => 51,
                'time_placed' => '2024-02-12 10:51:01',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            8 => 
            array (
                'order_id' => 52,
                'time_placed' => '2024-02-12 11:44:22',
                'status' => 'waiting',
                'user_id' => 7,
            ),
            9 => 
            array (
                'order_id' => 53,
                'time_placed' => '2024-02-12 11:45:21',
                'status' => 'waiting',
                'user_id' => 8,
            ),
            10 => 
            array (
                'order_id' => 54,
                'time_placed' => '2024-02-12 11:47:05',
                'status' => 'waiting',
                'user_id' => 7,
            ),
        ));
        
        
    }
}