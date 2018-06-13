<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'productsId' => 1,
                'description' => 'Guarana antarctica 2 Litros',
                'shortName' => 'Guarana antarctica 2 Litros',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 1.49,
                'salePrice' => 2.49,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'productsId' => 2,
                'description' => 'GUARANA ANTARCTICA DIET 12 PACK',
                'shortName' => 'GUARANA ANTARCTICA DIET 12 PACK',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 6.99,
                'salePrice' => 7.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'productsId' => 4,
                'description' => 'guarana antarctica 12 pack lata',
                'shortName' => 'guarana antarctica 12 pack lata',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 4.49,
                'salePrice' => 5.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'productsId' => 5,
                'description' => 'GUARANA ANTARCTICA 355 ML',
                'shortName' => 'GUARANA ANTARCTICA 355 ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.39,
                'salePrice' => 1.79,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'productsId' => 6,
            'description' => 'TAMPICO CITRUS PUNCH 1 GAL(3.78L)',
            'shortName' => 'TAMPICO CITRUS PUNCH 1GAL (3.78 L )',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.0,
                'salePrice' => 2.69,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'productsId' => 7,
            'description' => 'TAMPICO TROPICAL PUNCH 1 GAL(3.78L)',
            'shortName' => 'TAMPICO TROPICAL PUNCH 1 GAL (3.78L)',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.0,
                'salePrice' => 1.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'productsId' => 8,
            'description' => 'AGUA CRYSTAL SPRINGS 2.5 GAL (9.46L)',
            'shortName' => 'AGUA CRYSTAL SPRINGS 2.5 GAL (9.46L)',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.0,
                'salePrice' => 3.49,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'productsId' => 9,
                'description' => 'suco maguary maracuja concentrado 500 ml',
                'shortName' => 'suco maguary maracuja concentrado 500 ml',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 2.07,
                'salePrice' => 3.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'productsId' => 10,
                'description' => 'JUMEX TAMARIND NECTAR 335ML',
                'shortName' => 'JUMEX TAMARIND NECTAR 335ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.41,
                'salePrice' => 1.0,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'productsId' => 11,
                'description' => 'JUMEX GUAVA NECTAR 335ML',
                'shortName' => 'JUMEX GUAVA NECTAR 335ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.42,
                'salePrice' => 0.69,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'productsId' => 12,
                'description' => 'JUMEX PINEAPPLE NECTAR 335ML',
                'shortName' => 'JUMEX PINEAPPLE NECTAR 335ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.42,
                'salePrice' => 0.69,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'productsId' => 13,
                'description' => 'JUMEX STRAWBERRY BANANA NECTAR 335ML',
                'shortName' => 'JUMEX STRAWBERRY BANANA NECTAR 335ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.42,
                'salePrice' => 0.69,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'productsId' => 14,
                'description' => 'JUMEX PAPAYA PINEAPPLE NECTAR 335ML',
                'shortName' => 'JUMEX PAPAYA PINEAPPLE NECTAR 335ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.42,
                'salePrice' => 0.69,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'productsId' => 15,
                'description' => 'FOCO COCONUT JUICE 350ML',
                'shortName' => 'FOCO COCONUT JUICE 350ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.87,
                'salePrice' => 1.49,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'productsId' => 16,
                'description' => 'CAPRISUN GRAPE 200ML',
                'shortName' => 'CAPRISUN GRAPE 200ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.0,
                'salePrice' => 0.39,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'productsId' => 17,
                'description' => 'GATORADE STRAWBERRY KIWI 710ML',
                'shortName' => 'GATORADE STRAWBERRY KIWI 710ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.0,
                'salePrice' => 1.79,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'productsId' => 18,
                'description' => 'GATORADE ORANGE 0.946L',
                'shortName' => 'GATORADE ORANGE 0.946L',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.0,
                'salePrice' => 2.29,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'productsId' => 19,
                'description' => 'FLORIDAS NATURAL 296ML',
                'shortName' => 'FLORIDAS NATURAL 296ML',
                'brand' => '',
                'categoriesId' => 1,
                'costPrice' => 0.0,
                'salePrice' => 0.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'productsId' => 20,
                'description' => 'MABEL DOCE DE LEITE 140g',
                'shortName' => 'MABEL DOCE DE LEITE 140g',
                'brand' => '',
                'categoriesId' => 7,
                'costPrice' => 0.58,
                'salePrice' => 0.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'productsId' => 21,
                'description' => 'MABEL WAFER CHOCOLATE 140g',
                'shortName' => 'MABEL WAFER CHOCOLATE 140g',
                'brand' => '',
                'categoriesId' => 7,
                'costPrice' => 0.24,
                'salePrice' => 0.59,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'productsId' => 22,
                'description' => 'MABEL WAFER DOCE DE LEITE 140g',
                'shortName' => 'MABEL WAFER DOCE DE LEITE 140g',
                'brand' => '',
                'categoriesId' => 7,
                'costPrice' => 0.24,
                'salePrice' => 0.29,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'productsId' => 23,
                'description' => 'MABEL WAFER MORANGO 140g',
                'shortName' => 'MABEL WAFER MORANGO 140g',
                'brand' => '',
                'categoriesId' => 7,
                'costPrice' => 0.24,
                'salePrice' => 0.59,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'productsId' => 24,
                'description' => 'MABEL ROSQUINHAS DE COCO 400g',
                'shortName' => 'MABEL ROSQUINHAS DE COCO 400g',
                'brand' => '',
                'categoriesId' => 7,
                'costPrice' => 1.35,
                'salePrice' => 2.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'productsId' => 25,
                'description' => 'MABEL MARIA 400g',
                'shortName' => 'MABEL MARIA 400g',
                'brand' => '',
                'categoriesId' => 7,
                'costPrice' => 1.8399999999999999,
                'salePrice' => 3.49,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'productsId' => 26,
                'description' => 'mabel maizena 400 gr',
                'shortName' => 'MABEL MAIZENA 400g',
                'brand' => '',
                'categoriesId' => 7,
                'costPrice' => 1.35,
                'salePrice' => 3.99,
                'codeBalance' => '',
                'codeBegin' => '0',
                'codeEnd' => '0',
                'priceBegin' => '0',
                'priceEnd' => '0',
                'quantity' => 0,
                'min' => 0.0,
                'max' => 0.0,
                'discountMoney' => 0.0,
                'discount' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}