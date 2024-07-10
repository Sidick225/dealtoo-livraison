<?php

namespace App\Http\Controllers;

use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;


class LivreurController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livreurs = Livreur::paginate(25);
        return view('welcome', compact('$livreurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registerLivraison');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users|max:255',
        //     'password' => 'required|string|min:8',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('register')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        if (!is_array($request->images)) {
            $selectedImages = [$request->images];
        }

        if (count($selectedImages) > 6) {
            Flashy::warning('Vous ne pouvez sélectionner que jusqu\'à 6 images.');
            return redirect()->back()->withErrors(['images' => 'Vous ne pouvez sélectionner que jusqu\'à 6 images.']);
        }

        $livreur = Livreur::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'nom_societe' => $request->nom_societe,
            'presentation' => $request->presentation,
            // 'image_profil' => $request->image_profil,
            // 'image_couverture' => $request->image_couverture,
            'localisation' => $request->localisation,
            'site_web' => $request->site_web,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
            'fixe1' => $request->fixe1,
            'fixe2' => $request->fixe2,
            'mobile1' => $request->mobile1,
            'mobile2' => $request->mobile2,
            'map' => $request->html_map,
            'map_link' => $request->map_link,
            // 'servicePicture1' => $request->servicePicture1,
            'servicename1' => $request->servicename1,
            // 'servicePicture2' => $request->servicePicture2,
            'servicename2' => $request->servicename2,
            // 'servicePicture3' => $request->servicePicture3,
            'servicename3' => $request->servicename3,
            // 'images' => $request->images,

            'lundi_heure_debut' => $request->lundi_heure_debut,
            'lundi_heure_fin' => $request->lundi_heure_fin,
            'mardi_heure_debut' => $request->mardi_heure_debut,
            'mardi_heure_fin' => $request->mardi_heure_fin,
            'mercredi_heure_debut' => $request->mercredi_heure_debut,
            'mercredi_heure_fin' => $request->mercredi_heure_fin,
            'jeudi_heure_debut' => $request->jeudi_heure_debut,
            'jeudi_heure_fin' => $request->jeudi_heure_fin,
            'vendredi_heure_debut' => $request->vendredi_heure_debut,
            'vendredi_heure_fin' => $request->vendredi_heure_fin,
            'samedi_heure_debut' => $request->samedi_heure_debut,
            'samedi_heure_fin' => $request->samedi_heure_fin,
            'dimanche_heure_debut' => $request->dimanche_heure_debut,
            'dimanche_heure_fin' => $request->dimanche_heure_fin,
        ]);

        if ($request->image_profil) {
            $image_profil = $request->image_profil;
            $image_profilName = $image_profil->getClientOriginalName();
            if (!File::exists('images/' . $image_profilName)) {
                $request->image_profil->move('images', $image_profilName);
            }

            $livreur->update([
                'image_profil' => $image_profilName,
            ]);
        }
        if ($request->image_couverture) {
            $image_couverture = $request->image_couverture;
            $image_couvertureName = $image_couverture->getClientOriginalName();
            if (!File::exists('images/' . $image_couvertureName)) {
                $request->image_couverture->move('images', $image_couvertureName);
            }

            $livreur->update([
                'image_couverture' => $image_couvertureName,
            ]);
        }


        if ($request->servicePicture1) {
            $servicePicture1 = $request->servicePicture1;
            $servicePicture1Name = $servicePicture1->getClientOriginalName();
            if (!File::exists('images/' . $servicePicture1Name)) {
                $request->servicePicture1->move('images', $servicePicture1Name);
            }

            $livreur->update([
                'servicePicture1' => $servicePicture1Name,
            ]);
        }
        if ($request->servicePicture2) {
            $servicePicture2 = $request->servicePicture2;
            $servicePicture2Name = $servicePicture2->getClientOriginalName();
            if (!File::exists('images/' . $servicePicture2Name)) {
                $request->servicePicture2->move('images', $servicePicture2Name);
            }

            $livreur->update([
                'servicePicture2' => $servicePicture2Name,
            ]);
        }
        if ($request->servicePicture3) {
            $servicePicture3 = $request->servicePicture3;
            $servicePicture3Name = $servicePicture3->getClientOriginalName();
            if (!File::exists('images/' . $servicePicture3Name)) {
                $request->servicePicture3->move('images', $servicePicture3Name);
            }

            $livreur->update([
                'servicePicture3' => $servicePicture3Name,
            ]);
        }
        $imagesList = [];

        if ($request->images) {
            foreach ($request->images as $image) {
                $image = $request->image;
                $imageName = $image->getClientOriginalName();
                if (!File::exists('images/' . $imageName)) {
                    $request->image->move('images', $imageName);
                }
                $imagesList[] = $imageName;
            }
            $imagesListString = implode(', ', $imagesList);

            $livreur->update([
                'images' => $imagesListString,
            ]);
        }


        Alert::success($request->nom_societe.' à été enregistré avec succès');
        // Flashy::success($request->nom_societe.' à été enregistré avec succès');
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show($livreur)
    {
        $livreur = Livreur::find($livreur);
        return view('details', compact('livreur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livreur $livreur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livreur $livreur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livreur $livreur)
    {
       return  dd('coo');
    }
}
