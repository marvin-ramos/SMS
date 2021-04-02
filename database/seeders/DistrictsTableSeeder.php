<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            ['district' => 'district1'],
            ['district' => 'district2'],
            ['district' => 'district3'],
            ['district' => 'district4'],
            ['district' => 'district5']
        ]);
    }
}
