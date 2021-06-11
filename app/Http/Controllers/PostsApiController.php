<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsApiController extends Controller
{
    public function viewAll(){

        return Post::all();
    }
    public function viewById($id)
    {
        return Post::find($id);
    }

    public function createPost(Post $post){
        request()->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
       return  Post::create([
            'title'=>request('title'),
            'content'=>request('content'),
        ]);
    }

    public function updatePost(Post $post){

        request()->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

       return  $post->update([
            'title'=>request('title'),
            'content'=>request('content'),
        ]);
    }
    public function deletePost(Post $post){

        $success=$post->delete();

        return ['success'=>$success];

    }
}
