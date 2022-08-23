<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Meu primeiro post',
            'content' => 'Conteúdo Qualquer',
            'author' => 'Lucas'
        ];

        // Forma mais convencional de criar um registro no banco.
        // $post = new Post($new_post);
        // $post->save();

        $post = new Post();

        $post->title = 'Meu segundo post';
        $post->content = 'Conteúdo Qualquer';
        $post->author = 'Lucas Vieira';
        $post->save();

        dd($post);
    }

    public function read(Request $r) {
        
        $post = new Post();

        $post = $post->find(2);

        return $post;
    }

    public function all(Request $r) {
        $posts = Post::all();

        return $posts;
    }
}
