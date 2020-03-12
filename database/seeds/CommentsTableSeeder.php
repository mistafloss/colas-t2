<?php

use Illuminate\Database\Seeder;
use App\Comment;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            ['post_id' => 1,'comment_content' => str_random(10)],
            ['post_id' => 1,'comment_content' => str_random(10)],
            ['post_id' => 2,'comment_content' => str_random(10)]
        );
    }
}
