<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->insert([
            [
                'country_name'  => 'Russia',
                'national_card' => 'card'
            ],[
                'country_name'  => 'China',
                'national_card' => 'card'
            ],[
                'country_name'  => 'India',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Kazakhstan',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Saudi Arabia',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Iran',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Mongolia',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Indonesia',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Pakistan',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Turkey',
                'national_card' => 'card'
            ],[
                'country_name'  => 'Philippines',
                'national_card' => 'card'
            ]
        ]);
    }
}
