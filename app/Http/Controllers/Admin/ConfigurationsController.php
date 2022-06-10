<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationsController extends Controller
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


    public function show(Configuration $configuration)
    {
        //
    }


    public function edit(Configuration $configuration)
    {
        $configuration = Configuration::first();
        //return $configuration;
        return view('admin.configurations.edit', compact('configuration'));
    }


    public function update(Request $request, Configuration $configuration)
    {
        $request->validate([
            'logo'=>'image'
        ]);
 
         $configuration->update($request->all());
 
         if($request->hasFile('logo'))
         {
          $configuration->logo = $request->file('logo')->store('public/configurations');
         } 
 
         if($request->hasFile('icon'))
         {
          $configuration->icon = $request->file('icon')->store('public/configurations');
         } 


         $configuration->update();
         //public se refiere a storage/app/public
        
         //$configuration->update($request->only('name'));
         // return redirect()->route('configurations.edit')->with('flash', 'configuration actualizado con exito');
          return back()->with('flash', 'Configuración actualizado con exito');
    }


    public function destroy(Configuration $configuration)
    {
        //
    }
}
