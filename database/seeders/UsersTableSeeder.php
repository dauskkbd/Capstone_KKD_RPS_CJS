<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'user_id' => 4,
                'first_name' => 'Practice',
                'last_name' => 'Santo',
                'email' => 'practicesanto@gmail.com',
                'password' => '$2y$12$tnFIPtEuvDg9m65QvjppmuvRQaUHc2PFVuuFumRf8itCneP/WfJS.',
                'role' => 'admin',
                'mobile' => '0954356258',
                'province' => 'Cavite',
            ),
            1 => 
            array (
                'user_id' => 5,
                'first_name' => 'Ladis',
                'last_name' => 'Washerum',
                'email' => 'ladiswasherum@gmail.com',
                'password' => '$2y$12$Y.nYJwj/6/Ku.WiM9K7lfOwuhsVYRHNvKQoDWEwhSy2y/PRd3UhrK',
                'role' => 'user',
                'mobile' => '0958445563',
                'province' => 'Cavite',
            ),
            2 => 
            array (
                'user_id' => 6,
                'first_name' => 'Jack',
                'last_name' => 'Box',
                'email' => 'jackbox@gmail.com',
                'password' => '$2y$12$zoifh.2KAxucM3xzAc1KqeQtDSiA6oJ8brUPq0PWw/hCQ5lraw2oq',
                'role' => 'delivery',
                'mobile' => '0986365428',
                'province' => 'Bicol',
            ),
            3 => 
            array (
                'user_id' => 7,
                'first_name' => 'rendell',
                'last_name' => 'soberano',
                'email' => 'rendellsoberano@gmail.com',
                'password' => '$2y$12$f0NskSOLhnkMoPTu0JPQhO7cc.u78aFTT7vF7oe0PvJKn0K1VNEi6',
                'role' => 'user',
                'mobile' => '0927855665',
                'province' => 'NCR',
            ),
            4 => 
            array (
                'user_id' => 8,
                'first_name' => 'Kevin Kenneth',
                'last_name' => 'Daus',
                'email' => 'dauskkbd@gmail.com',
                'password' => '$2y$12$uTxzXyIzXxnj/NtQpyTqHOsTyE6cCuJlNB0SNjWGIqAJhoduC8gmO',
                'role' => 'user',
                'mobile' => '09272761763',
                'province' => 'Laguna',
            ),
            5 => 
            array (
                'user_id' => 9,
                'first_name' => 'Sample',
                'last_name' => 'Sample',
                'email' => 'sample@gmail.com',
                'password' => '$2y$12$vrQ9WiWqibCI/4kzSeMih.WyLZFPbZiAg6HW0aK0knntGL0/a7mhC',
                'role' => 'user',
                'mobile' => '123456789',
                'province' => 'Laguna',
            ),
        ));
        
        
    }
}