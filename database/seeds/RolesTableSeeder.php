<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        'role' => 'reader',
      ]);

      DB::table('roles')->insert([
        'role' => 'contributor',
      ]);

      DB::table('roles')->insert([
        'role' => 'administrator',
      ]);
    }
}
