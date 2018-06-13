<?php

use Illuminate\Database\Seeder;

class PromotersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('promoters')->delete();
        
        \DB::table('promoters')->insert(array (
            0 => 
            array (
                'promotersId' => 1,
                'name' => 'Amber',
                'email' => 'teste"teste.com',
                'phone' => '2344',
                'cellphone' => '4444',
                'address' => 'Teste',
                'city' => 'Atlanta',
                'state' => 'GA',
                'country' => 'US',
                'zipcode' => '30080',
                'sponsor' => 'Amber',
                'deleted_at' => NULL,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
            1 => 
            array (
                'promotersId' => 2,
                'name' => 'Nicole',
                'email' => 'teste"tes45.com',
                'phone' => '23256',
                'cellphone' => '555',
                'address' => 'Teste',
                'city' => 'Smyrna',
                'state' => 'GA',
                'country' => 'US',
                'zipcode' => '30067',
                'sponsor' => 'Jose',
                'deleted_at' => NULL,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ),
        ));
        
        
    }
}