<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }

    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
}
?>