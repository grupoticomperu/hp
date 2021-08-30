<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
     
    //public function show($id){
	//por defecto busca el id ahora cambiaremos por model binding	
     public function show(Post $post){//aqui por defecto busca por id y no es necesario poner 	$post = Post::find($id)
        
        //$posts = \App\Models\Post::latest('published_at')->get();
        //$post = Post::find($id);
     	if($post->isPublished() || auth()->check())
     	{
     		return view('posts.show', compact('post'));
     	}

     	abort(404);
        
    }
}
