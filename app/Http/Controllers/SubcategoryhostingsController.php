<?php

namespace App\Http\Controllers;
use App\Models\Subcategoryhosting;
use Illuminate\Http\Request;
use App\Models\Hosting;
use App\Models\Configuration;
use App\Models\Subcategoryservice;
use App\Models\Why;
use App\Models\Question;
//use App\Models\Service;

class SubcategoryhostingsController extends Controller
{
    public function show(Subcategoryhosting $subcategoryhosting){
       // $service = Service::where('subcategoryservice_id', $subcategoryservice->id)->first();     
        $hostings = Hosting::where('subcategoryhosting_id', $subcategoryhosting->id)->get();
        $title = $subcategoryhosting->name;
        $image = $subcategoryhosting->image;
       // return $title; 
        $configurations = Configuration::all()->first();
        $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
        $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
        $whies = Why::where('clasification', 1)->get();
        $questions = Question::where('clasification', 1)->get();
       // return $service;
        //return $subcategories; poner get
       return view('hosting', compact('subcategoryhosting','hostings','title','configurations','subcategories', 'subcategoriesd', 'image', 'whies','questions'));
    }
}
