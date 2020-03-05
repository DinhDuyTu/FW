<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Comment\CommentRepositoryInterface;
use Auth;

class CommentController extends Controller
{
    private $commentRepository;

    public function __construct (
        CommentRepositoryInterface  $commentRepository
    )
    {
        $this->commentRepository = $commentRepository;
    }

    public function store(Request $request)
    {
        $attr = $request->all();
        $attr['user_id'] = Auth::user()->id;
        $this->commentRepository->create($attr);
        
        return redirect()->back();
    }
}
