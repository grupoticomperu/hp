<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Subcategoryservice;
use App\Models\Hosting;
use App\Models\Subcategoryhosting;
use App\Models\Why;
use App\Models\Question;

class HostingsController extends Controller
{
    public function index(Hosting $hosting){ 
         $title = $hosting->title;
        // return $title;   
         $configurations = Configuration::all()->first();
         $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
         $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
         //return $subcategoriesd;
         

         $hostings = Hosting::all();


        // return $hostings;
         //return $subcategories; poner get
        return view('hosting', compact('configurations', 'subcategories', 'subcategoriesd', 'hostings'));
     }


     public function show(Hosting $hosting){

         $configurations = Configuration::all()->first();
         $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
         $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
         $whies = Why::where('clasification', 1)->get();
         $questions = Question::where('clasification', 1)->get();
         //return $subcategoriesd;
         //$image = $subcategoriesd->image;
         //return $configurations;
     
         return view('singlehosting', compact('configurations', 'hosting', 'subcategories', 'subcategoriesd', 'whies', 'questions'));

     }
}
