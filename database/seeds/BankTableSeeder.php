<?php

use Illuminate\Database\Seeder;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('banks')->insert([
        'nama_bank' => 'BCA'
      ]);
      DB::table('banks')->insert([
        'nama_bank' => 'MANDIRI'
      ]);
      DB::table('banks')->insert([
        'nama_bank' => 'BNI'
      ]);
    }
}
