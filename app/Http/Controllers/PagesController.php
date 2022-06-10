<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Offer;
use App\Models\Homeservice;
use App\Models\Configuration;
use App\Models\Subcategoryservice;
use App\Models\Subcategoryhosting;
use App\Models\Contact;
use App\Models\Work;

class PagesController extends Controller
{
    //
        public function home(){       
	       //$posts = \App\Models\Post::latest('published_at')->paginate(3);
	        //$posts = Post::published()->get() ;
	       // $posts = Post::published()->paginate(2);
			$sliders = Slider::where('state', 1)->get();
			$offers = Offer::where('state', 1)->get();
			//$homeservices = Homeservice::all();
			$homeservices = Homeservice::where('state', 1)->get();
			$configurations = Configuration::all()->first();
			$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			$subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
			//return $subcategories; poner get
	       return view('welcome', compact('sliders', 'offers','homeservices','configurations', 'subcategories', 'subcategoriesd'));
	    }

        public function blog(){       
			//$posts = \App\Models\Post::latest('published_at')->paginate(5);
			 //$posts = Post::published()->get() ;
			 $posts = Post::published()->paginate(2);
			//$sliders = Slider::all();
			// $offers = Offer::all();
			// $homeservices = Homeservice::all();
			 $blogs = Blog::all()->first();
			 $categories = Category::all();
			 $configurations = Configuration::all()->first();
			 $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			 $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
			 //return $subcategories; poner get
			return view('blog', compact('configurations', 'subcategories', 'subcategoriesd', 'posts', 'blogs','categories'));
		 }


		 public function proyectos(){       
			//$posts = \App\Models\Post::latest('published_at')->paginate(5);
			 //$posts = Post::published()->get() ;
			// $posts = Post::published()->paginate(2);
			 $works = Work::latest('id')->paginate(12);

			//$sliders = Slider::all();
			// $offers = Offer::all();
			// $homeservices = Homeservice::all();
			// $blogs = Blog::all()->first();
			 //$categories = Category::all();
			 $configurations = Configuration::all()->first();
			 $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			 $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
			 //return $subcategories; poner get
			return view('proyectosweb', compact('configurations', 'subcategories', 'subcategoriesd', 'works'));
		 }


		 public function showp(Work $work){//aqui por defecto busca por id y no es necesario poner 	$post = Post::find($id)
        
			//$posts = \App\Models\Post::latest('published_at')->get();
			//$post = Post::find($post);
			/* $blogs = Blog::all()->first();
			$categories = Category::all(); */
			$works = Work::all();
			$configurations = Configuration::all()->first();
			$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
			$subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
	
		
				 return view('singleproyectosweb', compact('works','work','configurations','subcategories','subcategoriesd'));
			 
	
			 abort(404);
			//return view('errors.404');
			
		}








		public function store(Request $request)
		{
			 $validated = $request->validate([
				'nombres' => 'required',
				'celular' => 'required',
				'mensaje' => 'required',
				'email' => 'required|email',
			]); 
	
		  $contact = Contact::create([
			'nombres' => $request->get('nombres'),
			'celular' => $request->get('celular'),
			'mensaje' => $request->get('mensaje'),
			'email' => $request->get('email')
	
		]);
	
	
		   //  $tag->save();
	
			//return redirect()->route('categories.index');
			return back()->with('flash', 'Mensaje Enviado, gracias por Contactar');
		}




}

