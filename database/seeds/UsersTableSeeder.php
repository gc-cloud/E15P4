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
        'name' => 'Joe Reader',
        'email' => 'joereader@gmail.com',
        'password' => bcrypt('secret'),
        'role_id' => 1,
      ]);

      DB::table('users')->insert([
        'name' => 'Joe Contributor',
        'email' => 'joecontributor@gmail.com',
        'password' => bcrypt('secret'),
        'role_id' => 2,
      ]);

      DB::table('users')->insert([
        'name' => 'Joe Administrator',
        'email' => 'joeadministrator@gmail.com',
        'password' => bcrypt('secret'),
        'role_id' => 3,
      ]);

      DB::table('users')->insert([
        'name' => 'Billy Shakespeare',
        'email' => 'writer@facemail.com',
        'password' => bcrypt('thisWillchange'),
        'role_id' => 2,
      ]);

      DB::table('users')->insert([
        'name' => 'Jill',
        'email' => 'jill@harvard.edu',
        'password' => bcrypt('helloworld'),
        'role_id' => 3,
      ]);

      DB::table('users')->insert([
        'name' => 'Jamal',
        'email' => 'jamal@harvard.edu',
        'password' => bcrypt('helloworld'),
        'role_id' => 3,
      ]);
    }
}
