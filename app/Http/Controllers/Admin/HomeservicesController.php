<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Homeservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeservicesController extends Controller
{

    public function index()
    {
        $homeservices = Homeservice::all();
        return view('admin.homeservices.index', compact('homeservices'));
    }


    public function create()
    {
        return view('admin.homeservices.create');
    }


    public function store(Request $request)
    {
        $homeservice = (new Homeservice)->fill($request->all());


        if($request->hasFile('image'))
        {
         $homeservice->image = $request->file('image')->store('public/homeservices');
        }
 
         $homeservice->save();
 
        //return redirect()->route('categories.index');
        return back()->with('flash', 'homeservice creado con exito');
    }


    public function show(Homeservice $homeservice)
    {
        //
    }


    public function edit(Homeservice $homeservice)
    {

       // $subcategoryhosting = Subcategoryhosting::pluck('name', 'id');

        return view('admin.homeservices.edit', compact('homeservice'));
    }


    public function update(Request $request, Homeservice $homeservice)
    {
        $this->validate(request(), [
    		'title' => 'required',
            'image'=>'image',
            
    	]);

        $homeservice->update($request->all());

        if($request->file('image')){
            $url = Storage::put('public/homeservices', $request->file('image'));
            if($homeservice->image){
                Storage::delete($homeservice->image);
                $homeservice->update([
                    'image' => $url
                ]);
            }
        }


        return redirect()->route('homeservices.index')->with('flash', 'Datos Actualizado con exito');

        
    }


    public function destroy(Homeservice $homeservice)
    {
        //
    }
}
