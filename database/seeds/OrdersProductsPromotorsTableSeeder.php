<?php

use Illuminate\Database\Seeder;

class OrdersProductsPromotorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders_products_promotors')->delete();
        
        \DB::table('orders_products_promotors')->insert(array (
            0 => 
            array (
                'productsId' => 1,
                'ordersId' => 1,
                'o_priceBegin' => '2.36',
                'o_priceEnd' => '2.56',
                'o_quantity' => 2,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
            1 => 
            array (
                'productsId' => 2,
                'ordersId' => 1,
                'o_priceBegin' => '3.67',
                'o_priceEnd' => '4.56',
                'o_quantity' => 2,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
            2 => 
            array (
                'productsId' => 4,
                'ordersId' => 1,
                'o_priceBegin' => '3.67',
                'o_priceEnd' => '58.65',
                'o_quantity' => 45,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
            3 => 
            array (
                'productsId' => 5,
                'ordersId' => 2,
                'o_priceBegin' => '23',
                'o_priceEnd' => '45',
                'o_quantity' => 4,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
            4 => 
            array (
                'productsId' => 7,
                'ordersId' => 2,
                'o_priceBegin' => '34',
                'o_priceEnd' => '56',
                'o_quantity' => 5,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
            5 => 
            array (
                'productsId' => 8,
                'ordersId' => 2,
                'o_priceBegin' => '32',
                'o_priceEnd' => '56',
                'o_quantity' => 9,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
            6 => 
            array (
                'productsId' => 9,
                'ordersId' => 3,
                'o_priceBegin' => '45',
                'o_priceEnd' => '54',
                'o_quantity' => 4,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
        ));
        
        
    }
}