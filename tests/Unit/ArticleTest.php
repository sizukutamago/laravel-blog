<?php

namespace Tests\Unit;

use App\Models\Article;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var Article
     */
    protected $article;

    public function setUp()
    {
        parent::setUp();

        $this->article = create(Article::class);
    }

    /** @test */
    public function 一人の作者がいる()
    {
        $this->assertInstanceOf(
            User::class,
            $this->article->creator
        );
    }
}
