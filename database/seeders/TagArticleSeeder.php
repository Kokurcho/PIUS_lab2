<?php

namespace Database\Seeders;

use App\Models\TagArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagArticleSeeder extends Seeder
{
    public function run()
    {
        TagArticle::factory()->count(100)->create();
    }
}