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
           ]);

        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('orders')->insert([ //,
                'ordersId' => $faker->unique()->numberBetween($min = 3, $max = 32),
                'promotersId' => $faker->numberBetween($min = 1, $max = 32),
                'finalValue' => $faker->numberBetween($min = 10, $max = 1000),
                'status' => $faker->numberBetween($min = 1, $max = 3),
                'created_at' => '2018-06-12 15:34:41',
                'deleted_at' => null,
                'updated_at' => '2018-06-12 15:34:41',

            ]);
        }
    }
}