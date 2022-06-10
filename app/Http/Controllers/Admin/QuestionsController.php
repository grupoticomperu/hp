<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index()
    {
        $questions = Question::all();
        return view('admin.questions.index', compact('questions'));
    }

 
    public function create()
    {
        return view('admin.questions.create');
    }


    public function store(Request $request)
    {
        $this->validate(request(), [
    		'title' => 'required',
    	]);

        $question = (new Question)->fill($request->all());

        $question->save();

       return redirect()->route('questions.index')->with('flash', 'Pregunta creado con exito');
    }


    public function show(Question $question)
    {
        //
    }


    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
