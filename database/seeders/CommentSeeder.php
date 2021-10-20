<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::all()->each(function ($article){
            Comment::factory(rand(0, 10))->make(['article_id' => $article->id])->each(function ($comment){
                $comment->user_id= User::inRandomOrder()->first()->id;
                $comment->save();
            });
        });
    }
}
