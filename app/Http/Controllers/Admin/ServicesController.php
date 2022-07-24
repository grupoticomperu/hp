<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Subcategoryservice;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{

    public function index()
    {
        $services = Service::all();
       

         return view('admin.services.index', compact('services'));
    }


    public function create()
    {

        $subcategoryservice = Subcategoryservice::pluck('name', 'id');
                          
        return view('admin.services.create', compact('subcategoryservice'));
    }


    public function store(Request $request)
    {

        $this->validate(request(), [
    		'title' => 'required'
    	]);


        $service = (new Service)->fill($request->all());

        if($request->hasFile('imagen1'))
        {
         //$service->imagen1 = $request->file('imagen1')->store('public/services/imagen1');
         $service->imagen1 = Storage::disk('s3')->put('hostingperu/service', $request->file('image1'), 'public');
        }

        if($request->hasFile('imagen2'))
        {
         //$service->imagen2 = $request->file('imagen2')->store('public/services/imagen2');
         $service->imagen2 = Storage::disk('s3')->put('hostingperu/service', $request->file('image2'), 'public');
        }

        if($request->hasFile('imagen3'))
        {
         //$service->imagen3 = $request->file('imagen3')->store('public/services/imagen3');
         $service->imagen3 = Storage::disk('s3')->put('hostingperu/service', $request->file('image3'), 'public');
        }

        if($request->hasFile('imagen4'))
        {
         //$service->imagen4 = $request->file('imagen4')->store('public/services/imagen4');
         $service->imagen4 = Storage::disk('s3')->put('hostingperu/service', $request->file('image4'), 'public');
        }


        $service->save();

        return redirect()->route('services.index')->with('flash', 'service creado con exito');

    }


    public function show(Service $service)
    {
        //
    }



    public function edit(Service $service)
    {
        $subcategoryservice = Subcategoryservice::pluck('name', 'id');

        return view('admin.services.edit', compact('service','subcategoryservice'));
    }


    public function update(Request $request, Service $service)
    {
        $this->validate(request(), [
    		'title' => 'required',
            'imagen1'=>'image',
            'imagen2'=>'image',
            'imagen3'=>'image',
            'imagen4'=>'image'
    	]);
        
        $service->update($request->all());



/*         if($request->file('imagen1')){
            $url = Storage::put('public/services/imagen1', $request->file('imagen1'));
            if($service->imagen1){
                Storage::delete($service->imagen1);
                $service->update([
                    'imagen1' => $url
                ]);
            }
        } */


        if($request->hasFile('imagen1')){
           
            $url = Storage::disk('s3')->put('hostingperu/service', $request->file('imagen1'), 'public');
            if($service->imagen1){
                Storage::disk('s3')->delete($service->imagen1);
                $service->update([
                    'imagen1' => $url
                ]);
            }else{
                $service->create([
                    'imagen1' => $url
                ]);
            }
        }


        if($request->hasFile('imagen2')){
           
            $url = Storage::disk('s3')->put('hostingperu/service', $request->file('imagen2'), 'public');
            if($service->imagen2){
                Storage::disk('s3')->delete($service->imagen2);
                $service->update([
                    'imagen2' => $url
                ]);
            }else{
                $service->create([
                    'imagen2' => $url
                ]);
            }
        }
          

        if($request->hasFile('imagen3')){
           
            $url = Storage::disk('s3')->put('hostingperu/service', $request->file('imagen3'), 'public');
            if($service->imagen3){
                Storage::disk('s3')->delete($service->imagen3);
                $service->update([
                    'imagen3' => $url
                ]);
            }else{
                $service->create([
                    'imagen3' => $url
                ]);
            }
        }


        if($request->hasFile('imagen4')){
           
            $url = Storage::disk('s3')->put('hostingperu/service', $request->file('imagen4'), 'public');
            if($service->imagen4){
                Storage::disk('s3')->delete($service->imagen4);
                $service->update([
                    'imagen4' => $url
                ]);
            }else{
                $service->create([
                    'imagen4' => $url
                ]);
            }
        }






/* 
        if($request->file('imagen2')){
            $url = Storage::put('public/services/imagen2', $request->file('imagen2'));
            if($service->imagen2){
                Storage::delete($service->imagen2);
                $service->update([
                    'imagen2' => $url
                ]);
            }
        }


        if($request->file('imagen3')){
            $url = Storage::put('public/services/imagen3', $request->file('imagen3'));
            if($service->imagen3){
                Storage::delete($service->imagen3);
                $service->update([
                    'imagen3' => $url
                ]);
            }
        }

        if($request->file('imagen4')){
            $url = Storage::put('public/services/imagen4', $request->file('imagen4'));
            if($service->imagen4){
                Storage::delete($service->imagen4);
                $service->update([
                    'imagen4' => $url
                ]);
            }
        }
 */


        //return redirect()->route('hostings.edit',$hosting)->with('flash', 'El plan del Hosting se actualizo');
        //return back()->with('flash', 'Datos actualizados con exito');
        return redirect()->route('services.index')->with('flash', 'Servicio Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
