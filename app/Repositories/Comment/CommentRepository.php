<?php

namespace App\Repositories\Comment;

use App\Repositories\EloquentRepository;
use App\Models\Comment;

class CommentRepository extends EloquentRepository implements CommentRepositoryInterface
{
    public function getModel()
    {
        return Comment::class;
    }
}
