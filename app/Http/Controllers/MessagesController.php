<?php

namespace App\Http\Controllers;

use App\Models\Livreur;
use App\Models\Messages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessagesController extends Controller
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
        $message = Messages::create([
            'livreur_id' => $request->livreur_id,
            'objet' => $request->objet,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'contact' => $request->contact,
            'message' => $request->message,
        ]);

        Alert::success('Merci de nous avoir contacter. Nous donnerons suite à votre requette au plus tôt.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($livreur_id)
    {
        $livreur = Livreur::find($livreur_id);
        $messages = Messages::where('livreur_id', $livreur_id)->get();

        return view('dashboard.messages', compact('livreur', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
