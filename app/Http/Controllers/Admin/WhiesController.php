<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Why;
use Illuminate\Http\Request;

class WhiesController extends Controller
{
 
    public function index()
    {
        $whies = Why::all();
        return view('admin.whies.index', compact('whies'));
    }


    public function create()
    {
        return view('admin.whies.create');
    }


    public function store(Request $request)
    {

        $this->validate(request(), [
    		'title' => 'required',
    	]);

        $why = (new Why)->fill($request->all());

        $why->save();

       //return redirect()->route('categories.index');
       //return back()->with('flash', 'Datos creado con exito');
       return redirect()->route('whies.index')->with('flash', 'Hosting creado con exito');
    }


    public function show(Why $why)
    {
        //
    }


    public function edit(Why $why)
    {
        return view('admin.whies.edit', compact('why'));
    }

 
    public function update(Request $request, Why $why)
    {
        $why->update($request->all());
 
        // $offer->update();
         //public se refiere a storage/app/public
        
         //$slider->update($request->only('name'));
          return redirect()->route('whies.index')->with('flash', 'Datos actualizado con exito');
         // return back()->with('flash', 'Categoria actualizado con exito');
    }


    public function destroy(Why $why)
    {
        //
    }
}
