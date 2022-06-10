<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamsController extends Controller
{

    public function index()
    {
        $teams = Team::all();
       

        return view('admin.teams.index', compact('teams'));
    }


    public function create()
    {
        return view('admin.teams.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
    		'name' => 'required'
    	]);


        $team = (new Team)->fill($request->all());

        if($request->hasFile('image'))
        {
         $team->image = $request->file('image')->store('public/team/image');
        }

       


        $team->save();

        return redirect()->route('teams.index')->with('flash', 'Integrante creado con exito');
    }


    public function show(Team $team)
    {
        //
    }


    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }


    public function update(Request $request, Team $team)
    {
        $this->validate(request(), [
    		'name' => 'required',
            'image'=>'image'
            
    	]);

        $team->update($request->all());



        if($request->file('image')){
            $url = Storage::put('public/team/image', $request->file('image'));
            if($team->image){
                Storage::delete($team->image);
                $team->update([
                    'image' => $url
                ]);
            }
        }

        return redirect()->route('teams.index')->with('flash', 'Trabajo Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
