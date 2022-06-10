<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Blog;
use App\Models\Configuration;
use App\Models\Category;
use App\Models\Subcategoryhosting;
use App\Models\Subcategoryservice;

class PostsController extends Controller
{
     
    //public function show($id){
	//por defecto busca el id ahora cambiaremos por model binding	
     public function show(Post $post){//aqui por defecto busca por id y no es necesario poner 	$post = Post::find($id)
        
        //$posts = \App\Models\Post::latest('published_at')->get();
        //$post = Post::find($post);
        $blogs = Blog::all()->first();
        $categories = Category::all();
        $configurations = Configuration::all()->first();
        $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
        $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();

     	if($post->isPublished() || auth()->check())
     	{
     		return view('singleblog', compact('post','blogs','categories','configurations','subcategories','subcategoriesd'));
     	}

     	abort(404);
        //return view('errors.404');
        
    }
    
}
