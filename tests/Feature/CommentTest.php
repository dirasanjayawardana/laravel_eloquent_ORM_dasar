<?php

namespace Tests\Feature;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    // CREATE
    // create data baru tanpa input created_at dan updated_at, karena otomatis diisi dengan timestamp
    // public function testCreateComment()
    // {
    //     $comment = new Comment();
    //     $comment->email = "dira@email.com";
    //     $comment->title = "Sample Title";
    //     $comment->comment = "Sample Comment";
    //     $comment->save();

    //     self::assertNotNull($comment->id);
    // }


    // public function testDefaultAttributeValues()
    // {
    //     $comment = new Comment();
    //     $comment->email = "dira@email.com";

    //     $comment->save();

    //     self::assertNotNull($comment->id);
    //     self::assertNotNull($comment->title);
    //     self::assertNotNull($comment->comment);
    // }

}
