<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Linda Morales',
        'email' => 'lindamor@gmail.com',
        'password' => bcrypt('secret'),
      ]);

      DB::table('users')->insert([
        'name' => 'Bill Falkner',
        'email' => 'billinnovates@gmail.com',
        'password' => bcrypt('secret'),
      ]);

      DB::table('users')->insert([
        'name' => 'John Baxter',
        'email' => 'johnnyappleseed@mymail.com',
        'password' => bcrypt('secret'),
      ]);
      
      DB::table('users')->insert([
        'name' => 'Billy Shakespeare',
        'email' => 'writer@facemail.com',
        'password' => bcrypt('thisWillchange'),
      ]);
    }
}
