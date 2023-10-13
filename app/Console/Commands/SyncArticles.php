<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class SyncArticles extends Command
{
    protected $signature = 'app:sync-articles {articleId?}';
    protected $description = 'Download and synchronize articles and images from an external server';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Implement synchronization logic here
        $articleId = $this->argument('articleId');

        $getToken = Http::asForm()->post('https://api-server-test-task.thinkdemo.co.uk/oauth/token', [
            'grant_type' => 'client_credentials',
            'client_id' => '2',
            'client_secret' => 'JbvrRBtKRU8zeEsUGGhBBf3w9wtd0z9iQCxnSwEo'
        ]);

        $token = $getToken->json()['access_token'];

        // Use the HTTP client to interact with the external API
        $response = Http::withHeaders(['Authorization' => 'Bearer '.$token])
            ->get('https://api-server-test-task.thinkdemo.co.uk/api/articles/'.$articleId);

        $articles = $response->json();
        $articles = count($articles) > 1 ? $articles['data'] : $articles;

        // Synchronize articles with your database
        foreach ($articles as $article) {
            $articleModel = Article::updateOrCreate(
                ['id' => $article['id']],
                ['title' => $article['title'], 'image_url' => $article['image']]
            );

            if (!empty($article['image'])) {
                $this->downloadImage($articleModel, $article['image']);
            }
        }

        // Delete articles that are no longer present in the external server response
        if (!$articleId) {
            $articleIds = collect($articles)->pluck('id');
            Article::whereNotIn('id', $articleIds)->delete();
        }

        $this->info('Articles synchronized successfully.');
    }

    private function downloadImage($article, $imageUrl)
    {
        $imageData = Http::get($imageUrl);
        if ($imageData->status() === 200) {            
            $path = 'images/' . $article->id . '.jpg';
            Storage::put($path, $imageData->body());
            $article->update(['image_url' => $path]);
        }
    }
}
