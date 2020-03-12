<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = "A new post";
        $post->content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut reprehenderit in voluptate velit ea qui officia deserunt mollit anim id est laborum.";
        $post->save();

        $post = new Post();
        $post->title = "Another new post";
        $post->content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut reprehenderit in voluptate velit ea qui officia deserunt mollit anim id est laborum.";
        $post->save();
    }
}
