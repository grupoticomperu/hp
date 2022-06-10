<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{

    public function index()
    {
        $offers = Offer::all();
        return view('admin.offers.index', compact('offers'));
    }


    public function create()
    {
        return view('admin.offers.create');
    }


    public function store(Request $request)
    {
        $offer = (new Offer)->fill($request->all());

         $offer->save();
 
        //return redirect()->route('categories.index');
        return back()->with('flash', 'Slider creado con exito');
 
    }

    public function activar(Request $request)
    {
       return "ok";
 
        //return redirect()->route('categories.index');
        return back()->with('flash', 'Slider creado con exito');
 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }


    public function edit(Offer $offer)
    {
        return view('admin.offers.edit', compact('offer'));
    }


    public function update(Request $request, Offer $offer)
    {

         $offer->update($request->all());
 
        // $offer->update();
         //public se refiere a storage/app/public
        
         //$slider->update($request->only('name'));
          return redirect()->route('offers.index')->with('flash', 'lo que Ofrecemos actualizado con exito');
         // return back()->with('flash', 'Categoria actualizado con exito');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
