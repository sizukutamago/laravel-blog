<?php

namespace Tests\Unit;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    protected $comment;

    public function setUp()
    {
        parent::setUp();

        $this->comment = create(Comment::class);
    }

    /** @test */
    public function 一つの記事を持つ()
    {
        $this->assertInstanceOf(
            Article::class,
            $this->comment->article
        );
    }

    /** @test */
    public function 一人の作者を持つ()
    {
        $this->assertInstanceOf(
            User::class,
            $this->comment->owner
        );
    }
}
