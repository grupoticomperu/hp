<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('admin.sliders.create');
    }


    public function store(StoreSliderRequest $request)
    {

       
       $slider = (new Slider)->fill($request->all());


       if($request->hasFile('image'))
       {
        $slider->image = $request->file('image')->store('public/sliders');
       }

        $slider->save();

       //return redirect()->route('categories.index');
       return back()->with('flash', 'Slider creado con exito');

    }


    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }


    public function update(Request $request, Slider $slider)
    {
       $request->validate([
           'image'=>'image'
       ]);

        $slider->update($request->all());

        if($request->hasFile('image'))
        {
         $slider->image = $request->file('image')->store('public/sliders');
        } 

        $slider->update();
        //public se refiere a storage/app/public
       
        //$slider->update($request->only('name'));
         return redirect()->route('sliders.index')->with('flash', 'Slider actualizado con exito');
        // return back()->with('flash', 'Categoria actualizado con exito');
    }


    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with('flash', 'El Slider se elimino con exito');
    }
}
