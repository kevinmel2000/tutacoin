<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Tuta Coin',
          'email' => 'admin@my.tuta',
          'password' => bcrypt('admin'),
      ]);
    }
}
