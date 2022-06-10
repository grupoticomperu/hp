<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Subcategoryservice;
use App\Models\Subcategoryhosting;
use App\Models\Team;
use App\Models\Work;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all()->first();
        $configurations = Configuration::all()->first();
        $subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
        $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
        $teams = Team::where('state', 1)->get();
        $works = Work::latest('id')->get();
        return view('about', compact('abouts','configurations','subcategories','subcategoriesd', 'teams', 'works'));
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
        //
    }


    public function update(Request $request, About $about)
    {
        //
    }


    public function destroy(About $about)
    {
        //
    }
}
