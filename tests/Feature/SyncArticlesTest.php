<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SyncArticlesTest extends TestCase
{
    use RefreshDatabase;

    public function testSyncAllArticles()
    {
        // Mock an OAuth token response
        Http::fake([
            'https://api-server-test-task.thinkdemo.co.uk/oauth/token' => Http::response(['access_token' => 'mocked_token'], 200),
        ]);

        // Mock the articles endpoint response
        Http::fake([
            'https://api-server-test-task.thinkdemo.co.uk/api/articles*' => Http::response([
                // Mocked article data
            ], 200),
        ]);

        // Run the Artisan command
        $this->artisan('app:sync-articles')->assertExitCode(0);
    }
}
