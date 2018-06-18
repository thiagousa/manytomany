<?php

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

        \DB::table('orders')->insert([
            0 => [
                'ordersId' => 1,
                'promotersId' => 1,
                'finalValue' => 2000,
                'status' => '1',
                'deleted_at' => null,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ],
            1 => [
                'ordersId' => 2,
                'promotersId' => 2,
                'finalValue' => 5600,
                'status' => '1',
                'deleted_at' => null,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ],
            2 => [
                'ordersId' => 3,
                'promotersId' => 1,
                'finalValue' => 58960,
                'status' => '1',
                'deleted_at' => null,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ],
        ]);
    }
}
