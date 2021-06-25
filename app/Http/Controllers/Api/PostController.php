<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        
        $post_response=[];
        foreach ($posts as $post){
            $post_response[] =[

                'title' => $post->title,
                'Content'=> $post->content,
                'catergory'=>$post->category ? $post->category->name : 'Categoria non esistente',
                'tags' => $post->tags->toarray()
            ];
        }

        $result=[
            'posts'=> $post_response,
            'result'=> true
        ];

        return response()->json($result);
    }
}
