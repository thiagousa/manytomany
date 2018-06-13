<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // PRODUCTS SQL
         $path = 'database/sql/products.sql';
         DB::unprepared(file_get_contents($path));
         $this->command->info('database PRODUCTS!');
      // Promotors SQL
          $path = 'database/sql/promotors.sql';
          DB::unprepared(file_get_contents($path));
          $this->command->info('database Promotors !');
           // Orders SQL
         $path = 'database/sql/orders.sql';
         DB::unprepared(file_get_contents($path));
         $this->command->info('database Orders!');
          // Orders_Products_Promotors SQL
          $path = 'database/sql/orders_products_promotors.sql';
          DB::unprepared(file_get_contents($path));
          $this->command->info(' database Orders_Products_Promotors !');
  
    }
}
