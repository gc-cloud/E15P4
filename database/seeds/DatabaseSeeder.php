<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(SourcesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ArticlesCommentsTableSeeder::class);
        $this->call(CommentsUsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ArticlesCategoriesTableSeeder::class);
        $this->call(SourcesTableSeeder::class);
        $this->call(ArticlesSourcesTableSeeder::class);

        Model::reguard();
    }
}
