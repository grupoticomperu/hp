<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Subcategoryservice;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;
use App\Models\Why;

class SubcategoryservicesController extends Controller
{

    public function show(Subcategoryservice $subcategoryservice){
             
         $service = Service::where('subcategoryservice_id', $subcategoryservice->id)->first();
         $configurations = Configuration::all()->first();
         $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
         $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
         $whies = Why::where('clasification', 2)->get();
        // return $service;
         //return $subcategories; poner get
        return view('servicios', compact('service', 'configurations','subcategories','subcategoriesd','whies'));
     }






}
