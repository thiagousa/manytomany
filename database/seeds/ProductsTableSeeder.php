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

        \DB::table('products')->insert(array(
            0 =>
                array(
                    'productsId' => 1,
                    'description' => 'Guarana antarctica 2 Litros',
                    'shortName' => 'Guarana antarctica 2 Litros',
                    'costPrice' => 1.49,
                    'salePrice' => 2.49,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array(
                    'productsId' => 2,
                    'description' => 'GUARANA ANTARCTICA DIET 12 PACK',
                    'shortName' => 'GUARANA ANTARCTICA DIET 12 PACK',
                    'costPrice' => 6.99,
                    'salePrice' => 7.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array(
                    'productsId' => 3,
                    'description' => 'Guarana antarctica 2 Litros',
                    'shortName' => 'Guarana antarctica 2 Litros',
                    'costPrice' => 1.49,
                    'salePrice' => 2.49,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            3 =>
                array(
                    'productsId' => 4,
                    'description' => 'guarana antarctica 12 pack lata',
                    'shortName' => 'guarana antarctica 12 pack lata',
                    'costPrice' => 4.49,
                    'salePrice' => 5.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array(
                    'productsId' => 5,
                    'description' => 'GUARANA ANTARCTICA 355 ML',
                    'shortName' => 'GUARANA ANTARCTICA 355 ML',
                    'costPrice' => 0.39,
                    'salePrice' => 1.79,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array(
                    'productsId' => 6,
                    'description' => 'TAMPICO CITRUS PUNCH 1 GAL(3.78L)',
                    'shortName' => 'TAMPICO CITRUS PUNCH 1GAL (3.78 L )',
                    'costPrice' => 0.0,
                    'salePrice' => 2.69,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array(
                    'productsId' => 7,
                    'description' => 'TAMPICO TROPICAL PUNCH 1 GAL(3.78L)',
                    'shortName' => 'TAMPICO TROPICAL PUNCH 1 GAL (3.78L)',
                    'costPrice' => 0.0,
                    'salePrice' => 1.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            7 =>
                array(
                    'productsId' => 8,
                    'description' => 'AGUA CRYSTAL SPRINGS 2.5 GAL (9.46L)',
                    'shortName' => 'AGUA CRYSTAL SPRINGS 2.5 GAL (9.46L)',
                    'costPrice' => 0.0,
                    'salePrice' => 3.49,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            8 =>
                array(
                    'productsId' => 9,
                    'description' => 'suco maguary maracuja concentrado 500 ml',
                    'shortName' => 'suco maguary maracuja concentrado 500 ml',
                    'costPrice' => 2.07,
                    'salePrice' => 3.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            9 =>
                array(
                    'productsId' => 10,
                    'description' => 'JUMEX TAMARIND NECTAR 335ML',
                    'shortName' => 'JUMEX TAMARIND NECTAR 335ML',
                    'costPrice' => 0.41,
                    'salePrice' => 1.0,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            10 =>
                array(
                    'productsId' => 11,
                    'description' => 'JUMEX GUAVA NECTAR 335ML',
                    'shortName' => 'JUMEX GUAVA NECTAR 335ML',
                    'costPrice' => 0.42,
                    'salePrice' => 0.69,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            11 =>
                array(
                    'productsId' => 12,
                    'description' => 'JUMEX PINEAPPLE NECTAR 335ML',
                    'shortName' => 'JUMEX PINEAPPLE NECTAR 335ML',
                    'costPrice' => 0.42,
                    'salePrice' => 0.69,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            12 =>
                array(
                    'productsId' => 13,
                    'description' => 'JUMEX STRAWBERRY BANANA NECTAR 335ML',
                    'shortName' => 'JUMEX STRAWBERRY BANANA NECTAR 335ML',
                    'costPrice' => 0.42,
                    'salePrice' => 0.69,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            13 =>
                array(
                    'productsId' => 14,
                    'description' => 'JUMEX PAPAYA PINEAPPLE NECTAR 335ML',
                    'shortName' => 'JUMEX PAPAYA PINEAPPLE NECTAR 335ML',
                    'costPrice' => 0.42,
                    'salePrice' => 0.69,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            14 =>
                array(
                    'productsId' => 15,
                    'description' => 'FOCO COCONUT JUICE 350ML',
                    'shortName' => 'FOCO COCONUT JUICE 350ML',
                    'costPrice' => 0.87,
                    'salePrice' => 1.49,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            15 =>
                array(
                    'productsId' => 16,
                    'description' => 'Guarana antarctica 2 Litros',
                    'shortName' => 'Guarana antarctica 2 Litros',
                    'costPrice' => 1.49,
                    'salePrice' => 2.49,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            16 =>
                array(
                    'productsId' => 17,
                    'description' => 'GUARANA ANTARCTICA DIET 12 PACK',
                    'shortName' => 'GUARANA ANTARCTICA DIET 12 PACK',
                    'costPrice' => 6.99,
                    'salePrice' => 7.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            17 =>
                array(
                    'productsId' => 18,
                    'description' => 'guarana antarctica 12 pack lata',
                    'shortName' => 'guarana antarctica 12 pack lata',
                    'costPrice' => 4.49,
                    'salePrice' => 5.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            18 =>
                array(
                    'productsId' => 19,
                    'description' => 'Guarana antarctica 2 Litros',
                    'shortName' => 'Guarana antarctica 2 Litros',
                    'costPrice' => 1.49,
                    'salePrice' => 2.49,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            19 =>
                array(
                    'productsId' => 20,
                    'description' => 'GUARANA ANTARCTICA DIET 12 PACK',
                    'shortName' => 'GUARANA ANTARCTICA DIET 12 PACK',
                    'costPrice' => 6.99,
                    'salePrice' => 7.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            20 =>
                array(
                    'productsId' => 21,
                    'description' => 'Guarana antarctica 2 Litros',
                    'shortName' => 'Guarana antarctica 2 Litros',
                    'costPrice' => 1.49,
                    'salePrice' => 2.49,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            21 =>
                array(
                    'productsId' => 22,
                    'description' => 'guarana antarctica 12 pack lata',
                    'shortName' => 'guarana antarctica 12 pack lata',
                    'costPrice' => 4.49,
                    'salePrice' => 5.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            22 =>
                array(
                    'productsId' => 23,
                    'description' => 'guarana antarctica 12 pack lata',
                    'shortName' => 'guarana antarctica 12 pack lata',
                    'costPrice' => 4.49,
                    'salePrice' => 5.99,
                    'quantity' => 0,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));

        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([ //,
                'productsId' => $faker->unique()->numberBetween($min = 24, $max = 53),
                'description' => $faker->name,
                'shortName' => $faker->name,
                'costPrice' => $faker->randomNumber(2),
                'salePrice' => $faker->randomNumber(2),
                'quantity' => $faker->randomNumber(2),
                'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'deleted_at' => NULL,
                'updated_at' => NULL,


            ]);
        }
    }
}