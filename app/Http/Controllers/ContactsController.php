<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nombres' => 'required',
            'celular' => 'required',
            'mensaje' => 'required',
            'email' => 'required|email',
        ]); 

      $contact = Contact::create([
        'nombres' => $request->get('nombres'),
        'celular' => $request->get('celular'),
        'mensaje' => $request->get('mensaje'),
        'email' => $request->get('email')

    ]);


       //  $tag->save();

        //return redirect()->route('categories.index');
        return back()->with('flash', 'Mensaje Enviado, gracias por Contactar');
    }
}
