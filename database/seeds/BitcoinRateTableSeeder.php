<?php

use Illuminate\Database\Seeder;

class BitcoinRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('bitcoin_rates')->insert([
          'rate_jual' => '4167680',
          'rate_beli' => '6598320',
      ]);
    }
}
