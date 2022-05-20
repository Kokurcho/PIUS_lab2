<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\TagArticle;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         User::factory()->count(100)->create();
         Article::factory()->count(100)->create();
         Tag::factory()->count(100)->create();
         TagArticle::factory()->count(100)->create();
    }
}