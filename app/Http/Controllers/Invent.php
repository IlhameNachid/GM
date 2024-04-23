<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaire;

class Invent extends Controller
{
    public function index()
    {
        return view('inventaires.index', ['inventaires' => Inventaire::all()]);
    }

    public function afficherPageAjout()
    {
        return view('inventaires.etablissement');
    }

    public function create()
    {
        return view('inventaires.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'num_article' => 'required|unique:inventaires',
            'Designation' => 'required',
            'num_inventaire' => 'required|unique:inventaires|numeric',
            'État' => 'required|in:Bon,Passable,À retirer',
        ]);

        Inventaire::create([
            'num_article' => $validatedData['num_article'],
            'Designation' => $validatedData['Designation'],
            'num_inventaire' => $validatedData['num_inventaire'],
            'État' => $validatedData['État'],
        ]);

        return redirect()->route('inventaires.index')
            ->with('success', 'Inventaire ajouté avec succès.');
    }

    public function edit(Inventaire $inventaire)
    {
        return view('inventaires.edit', compact('inventaire'));
    }

    public function update(Request $request, Inventaire $inventaire)
    {
        $validatedData = $request->validate([
            'num_article' => 'required|unique:inventaires,num_article,' . $inventaire->id,
            'Designation' => 'required',
            'num_inventaire' => 'required|unique:inventaires,num_inventaire,' . $inventaire->id . '|numeric',
            'État' => 'required|in:Bon,Passable,À retirer',
        ]);

        $inventaire->num_article = $validatedData['num_article'];
        $inventaire->Designation = $validatedData['Designation'];
        $inventaire->num_inventaire = $validatedData['num_inventaire'];
        $inventaire->État = $validatedData['État'];
        $inventaire->save();

        return redirect()->route('inventaires.index')
            ->with('success', 'Inventaire modifié avec succès.');
    }

    public function destroy($inventaireId)
    {
        // Trouver l'élément à supprimer
        $toDelete = Inventaire::findOrFail($inventaireId);

        // Récupérer le numéro d'article de l'élément à supprimer
        $deletedNumArticle = $toDelete->num_article;

        // Supprimer l'élément
        $toDelete->delete();

        $inventaires = Inventaire::orderBy('num_article')->get();
        $newNumArticle = 1;
        foreach ($inventaires as $inventaire) {
            if ($inventaire->num_article != $newNumArticle) {
                $inventaire->num_article = $newNumArticle;
                $inventaire->save();
            }
            $newNumArticle++;
        }

        return redirect()->route('inventaires.index');
    }
}
