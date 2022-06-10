<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hosting;
use App\Models\Subcategoryhosting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HostingsController extends Controller
{
  
    public function index()
    {
        $hostings = Hosting::all();
        // $posts = Post::where('user_id', auth()->id())->get();
        /// $posts = auth()->user()->posts;

       // $posts = Post::allowed()->get();

       // if( auth()->user()->hasRole('Admin') )
      //  {
       //     $posts = Post::all();
           // return $query;
       // }
      //  else
      //  {
      //      $posts = auth()->user()->posts;
      // }

         return view('admin.hostings.index', compact('hostings'));
    }


    public function create()
    {
        //$categories = Category::all();
        $subcategoryhosting = Subcategoryhosting::pluck('name', 'id');
      //  $tags = Tag::all();
        
        return view('admin.hostings.create', compact('subcategoryhosting'));
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
    		'title' => 'required'
    	]);


        $hosting = (new Hosting)->fill($request->all());

        if($request->hasFile('imagen'))
        {
         $hosting->imagen = $request->file('imagen')->store('public/hostings/imagen');
        }

        if($request->hasFile('imagen2'))
        {
         $hosting->imagen2 = $request->file('imagen2')->store('public/hostings/imagen2');
        }


        $hosting->save();

        return redirect()->route('hostings.index')->with('flash', 'Hosting creado con exito');
     //    return back()->with('flash', 'Datos creados con exito');

    }


    public function show(Hosting $hosting)
    {
        
    }


    public function edit(Hosting $hosting)
    {
        $subcategoryhosting = Subcategoryhosting::pluck('name', 'id');

        return view('admin.hostings.edit', compact('hosting','subcategoryhosting'));
    }


    public function update(Request $request, Hosting $hosting)
    {

        $this->validate(request(), [
    		'title' => 'required',
            'imagen'=>'image',
            'imagen2'=>'image'
    	]);
        
        $hosting->update($request->all());


/*         if($request->hasFile('imagen'))
        {
         $hosting->imagen = $request->file('imagen')->store('public/hostings/imagen');
        }  */


        if($request->file('imagen')){
            $url = Storage::put('public/hostings/imagen', $request->file('imagen'));
            if($hosting->imagen){
                Storage::delete($hosting->imagen);
                $hosting->update([
                    'imagen' => $url
                ]);
            }
        }


        if($request->file('imagen2')){
            $urll = Storage::put('public/hostings/imagen2', $request->file('imagen2'));
            if($hosting->imagen2){
                Storage::delete($hosting->imagen2);
                $hosting->update([
                    'imagen2' => $urll
                ]);
            }
        }

        //return redirect()->route('hostings.edit',$hosting)->with('flash', 'El plan del Hosting se actualizo');
        //return back()->with('flash', 'Datos actualizados con exito');
        return redirect()->route('hostings.index')->with('flash', 'Hosting Actualizado con exito');

    }



    public function destroy(Hosting $hosting)
    {
        //
    }
}
