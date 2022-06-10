<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;
use App\Models\Subcategoryservice;
class CategoriesController extends Controller
{
    public function show(Category $category)
    {

		$blogs = Blog::all()->first();
		$title = "Publicaciones de la categoria:  $category->name ";
		$posts = $category->posts()->paginate(1);
		$categories = Category::all();
		$configurations = Configuration::all()->first();
		$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
		$subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
    	return view('blog', compact('blogs','title','posts','configurations','subcategories','subcategoriesd','categories'));
    	
    }
}

