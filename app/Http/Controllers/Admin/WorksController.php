<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorksController extends Controller
{


    public function index()
    {
        $works = Work::all();
       

        return view('admin.works.index', compact('works'));
    }


    
    public function create()
    {

                          
        return view('admin.works.create');
    }


    
    public function store(Request $request)
    {
        $this->validate(request(), [
    		'title' => 'required'
    	]);


        $service = (new Work)->fill($request->all());

        if($request->hasFile('image'))
        {
         $service->image = $request->file('image')->store('public/work/image');
        }

       


        $service->save();

        return redirect()->route('works.index')->with('flash', 'Trabajo creado con exito');
    }


    
    public function show(Work $work)
    {
        //
    }


    
    public function edit(Work $work)
    {
      
        return view('admin.works.edit', compact('work'));
    }


    
    public function update(Request $request, Work $work)
    {
        $this->validate(request(), [
    		'title' => 'required',
            'image'=>'image'
            
    	]);

        $work->update($request->all());



        if($request->file('image')){
            $url = Storage::put('public/work/image', $request->file('image'));
            if($work->image){
                Storage::delete($work->image);
                $work->update([
                    'image' => $url
                ]);
            }
        }

        return redirect()->route('works.index')->with('flash', 'Trabajo Actualizado con exito');

    }


    
    public function destroy(Work $work)
    {
        //
    }
}
