<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Pagecontact;
use App\Models\Subcategoryservice;
use App\Models\Subcategoryhosting;

class PagecontactController extends Controller
{
     
    public function index()
    {
                
        $pagescontacts = Pagecontact::all()->first();
        $configurations = Configuration::all()->first();
        $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
        $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();

        return view('contact', compact('pagescontacts','configurations', 'subcategories', 'subcategoriesd'));
    }

}
