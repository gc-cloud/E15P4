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
        'name' => 'Guest',
        'email' => 'guest@zudbu.com',
        'password' => bcrypt('aldk!indosndf$#44aodsisdnifsasf'),
        'role_id' => 1,
      ]);

      DB::table('users')->insert([
        'name' => 'Joe',
        'email' => 'joe@zudbu.com',
        'password' => bcrypt('helloworld'),
        'role_id' => 1,
      ]);

      DB::table('users')->insert([
        'name' => 'Paco',
        'email' => 'paco@zudbu.com',
        'password' => bcrypt('helloworld'),
        'role_id' => 2,
      ]);

      DB::table('users')->insert([
        'name' => 'Shele',
        'email' => 'shele@zudbu.com',
        'password' => bcrypt('helloworld'),
        'role_id' => 3,
      ]);

      DB::table('users')->insert([
        'name' => 'Bill',
        'email' => 'bill@zudbu.com',
        'password' => bcrypt('helloworld'),
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
        'role_id' => 1,
      ]);



    }
}
