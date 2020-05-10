<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new Post();
        $post1->title = "First Post";
        $post1->body = "lorem ipsum";
        $post1->author = "Milos";
        $post1->save();

        $post2 = new Post();
        $post2->title = "Second Post";
        $post2->body = "lorem ipsum";
        $post2->author = "Ivan";
        $post2->save();
    }
}
