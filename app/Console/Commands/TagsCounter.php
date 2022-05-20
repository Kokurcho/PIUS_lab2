<?php
namespace App\Console\Commands;
use App\Models\Article;
use Illuminate\Console\Command;

class TagsCounter extends Command
{
    protected $signature = 'tag:count {id}';
    protected $description = 'Return amount of articles with tag';
    
    public function handle()
    {
        $id = $this->argument('id');
        $count = Article::whereHas('tags', function($q) use ($id) {
            $q->where('name', '=', $id);
        })->count();
        $this->info($count);
        return 0;
    }
}