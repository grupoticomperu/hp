<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function show(Category $category)
    {
    	return view('welcome',[
    		//'category' => $category,
    		'title' => "Publicaciones de la categoria:  $category->name ",
    		//'posts'=> $category->posts  cuando va solo no es necesario poner()
    		'posts'=> $category->posts()->paginate(3)
    	]);
    	
    }
}
