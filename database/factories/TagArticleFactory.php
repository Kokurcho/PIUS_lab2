<?php
namespace Database\Factories;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class TagArticleFactory extends Factory
{
    //make factory
    public function definition()
    {
        $articles = DB::table('articles')->pluck('id');
        $tags = DB::table('tags')->pluck('id');
        return [
            'article_id' => $this->faker->randomElement($articles),
            'tag_id' => $this->faker->randomElement($tags)
        ];
    }
}