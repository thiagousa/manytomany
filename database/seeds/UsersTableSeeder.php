<?php

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
                'id' => 1,
                'name' => 'Thiago',
                'email' => 'thiago@thiagodsantos.com',
                'password' => '$2y$10$wA0oZ3GGNMI7ybfX3uAA1uEQPvhsa/l5EtG308/4i8llgne0Vj7/O',
                'remember_token' => 'zRaqiTENG0jPErIsYnL4AkFAZZWoVAFTvVKyrWeQIybPjAvLpohS9R8KYrfM',
                'created_at' => '2018-06-20 19:06:49',
                'updated_at' => '2018-06-20 19:06:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Samuel',
                'email' => 'hellish.doom@gmail.com',
                'password' => '$2y$10$gKRFN2ckOhhi5BhtgKR/xOp.YBovhfXfrvR9BJvio.D49BwAdrlWm',
                'remember_token' => '3W36NMXEwgQreAVym0OfoP1xKMSluajRYHnTl43xgVIgGYzbFoZ2pGhndcx3',
                'created_at' => '2018-06-20 19:16:08',
                'updated_at' => '2018-06-20 19:16:08',
            ),
        ));
        
        
    }
}