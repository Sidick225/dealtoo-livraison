<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Livreur;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $avis = Avis::create([
            'livreur_id' => $request->livreur_id,
            'note' => $request->note,
            'comment' => $request->comment
        ]);

        $allAvis = Avis::where('livreur_id', $livreur_id)->get();
        $totalNotes = $allAvis->sum('note');
        $averageNote = ($totalNotes / ($allAvis->count() * 5)) * 5;

        $livreur = Livreur::find($livreur_id);
        $livreur->update([
            'avgNote' => $averageNote
        ]);

        Alert::success('Merci de nous avoir donner votre avis.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($livreur_id)
    {
        $livreur = Livreur::find($livreur_id);
        $avis = Avis::where('livreur_id', $livreur_id)->get();
        return view('dashboard.commentaires', compact('avis', 'livreur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avis $avis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avis $avis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avis $avis)
    {
        //
    }
}
