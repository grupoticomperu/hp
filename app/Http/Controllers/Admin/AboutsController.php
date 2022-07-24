<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(About $about)
    {
        //
    }


    public function edit(About $about)
    {
        $about = About::first();
        //return $abouts;
        return view('admin.abouts.edit', compact('about'));
    }

   
    public function update(Request $request, About $about)
    {


        $about->update($request->all());

/*         if($request->file('imagen1')){
            $url = Storage::put('hostingperu/about', $request->file('imagen1'));
            if($about->imagen1){
                Storage::delete($about->imagen1);
                $about->update([
                    'imagen1' => $url
                ]);
            }else{
                $about->create([
                    'imagen1' => $url
                ]);
            }
        } */


        if($request->hasFile('imagen1')){
           
            $url = Storage::disk('s3')->put('hostingperu/about', $request->file('imagen1'), 'public');
            if($about->imagen1){
                Storage::disk('s3')->delete($about->imagen1);
                $about->update([
                    'imagen1' => $url
                ]);
            }else{
                $about->create([
                    'imagen1' => $url
                ]);
            }
        }


        if($request->hasFile('imagen2')){
           
            $url = Storage::disk('s3')->put('hostingperu/about', $request->file('imagen2'), 'public');
            if($about->imagen2){
                Storage::disk('s3')->delete($about->imagen2);
                $about->update([
                    'imagen2' => $url
                ]);
            }else{
                $about->create([
                    'imagen2' => $url
                ]);
            }
        }










/*         if($request->file('imagen2')){
            $url = Storage::put('hostingperu/about', $request->file('imagen2'));
            if($about->imagen2){
                Storage::delete($about->imagen2);
                $about->update([
                    'imagen2' => $url
                ]);
            }else{
                $about->create([
                    'imagen2' => $url
                ]);
            }
        } */


        return back()->with('flash', 'Datos actualizados con exito');

    }


    public function destroy(About $about)
    {
        //
    }
}
