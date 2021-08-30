<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    //
        public function home(){
	        
	       //$posts = \App\Models\Post::latest('published_at')->paginate(3);
	        //$posts = Post::published()->get() ;
	       $posts = Post::published()->paginate(3);

	       return view('welcome', compact('posts'));
	    }
}

