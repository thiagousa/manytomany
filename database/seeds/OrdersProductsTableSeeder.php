<?php

use Illuminate\Database\Seeder;

class OrdersProductsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('orders_products')->delete();

        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {

           DB::table('orders_products')->insert([ //,
                'productsId' => $faker->numberBetween($min = 1, $max = 53),
                'ordersId' => $faker->numberBetween($min = 1, $max = 32),
                'o_priceBegin' => $faker->randomNumber(2),
                'o_priceEnd' => $faker->randomNumber(2),
                'o_quantity' => $faker->randomNumber(2),
                'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' => null,

            ]);
        }
    }
}