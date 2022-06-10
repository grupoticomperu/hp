<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;
use App\Models\Subcategoryservice;

class TagsController extends Controller
{
    //
    public function show(Tag $tag)
    {

		$blogs = Blog::all()->first();
		$title = "Publicaciones de la etiqueta:  $tag->name ";
		$posts = $tag->posts()->paginate(3);
		$categories = Category::all();
		$configurations = Configuration::all()->first();
		$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
		$subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();


		return view('blog', compact('blogs','title','posts','configurations','subcategories','subcategoriesd','categories'));


/*     	return view('welcome',[
    		//'tag' => $tag,
    		'title' => "Publicaciones de la etiqueta:  $tag->name ",
    		'posts'=>$tag->posts()->paginate(3)]
    	);
 */
    	
    }
}
