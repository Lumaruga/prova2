<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    // Mostra tutte le persone
    public function index()
    {
        $personas = Persona::all();
        
        return view('persone.index', compact('personas'));
    }

    // Mostra il modulo di creazione di una persona
    public function create()
    {
        return view('persone.create');
    }

    // Salva una nuova persona nel database
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cognome' => 'required',
        ]);

        Persona::create($request->all());

        return redirect()->route('persone.index')
            ->with('success', 'Persona creata con successo!');
    }

    // Mostra i dettagli di una persona
    public function show(Persona $persone)
        {
            return view('persone.show', compact('persone'));
        }


    // Mostra il modulo di modifica di una persona
    public function edit(Persona $persone)
    {
        return view('persone.edit', compact('persone'));
    }

    // Aggiorna una persona nel database
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $request->validate([
            'nome' => 'required',
            'cognome' => 'required',
        ]);
        $persone = Persona::findOrFail($id);
        $persone->update($data);

        return redirect()->route('persone.show', $persone->id);
    }

    // Elimina una persona dal database
    public function destroy(Persona $persone)
    {
        $persone->delete();
        return redirect()->route('persone.index');
    }
}