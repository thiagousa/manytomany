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

        \DB::table('promoters')->insert([
            0 => [
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
                'deleted_at' => null,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ],
            1 => [
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
                'deleted_at' => null,
                'created_at' => '2018-06-12 15:34:41',
                'updated_at' => '2018-06-12 15:34:41',
            ],
        ]);

        $faker = Faker\Factory::create();

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('promoters')->insert([ //,
                'promotersId' => $faker->unique()->numberBetween($min = 3, $max = 32),
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->e164PhoneNumber ,
                'cellphone' => $faker->e164PhoneNumber ,
                'address' => $faker->streetAddress ,
                'city' => $faker->city ,
                'state' => $faker->stateAbbr,
                'country' => 'US',
                'zipcode' => $faker->postcode ,
                'sponsor' => $faker->firstName,
                'deleted_at' => null,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => null,

            ]);
        }
    }
}