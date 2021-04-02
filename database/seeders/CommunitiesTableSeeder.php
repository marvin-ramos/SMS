<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->insert([
            ['community' => 'community1'],
            ['community' => 'community2'],
            ['community' => 'community3'],
            ['community' => 'community4'],
            ['community' => 'community5']
        ]);
    }
}
