<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use App\Models\Visit;
use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('register')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // if (!is_array($request->images)) {
        //     $selectedImages = [$request->images];
        // }

        if ($request->images && count($request->images) > 6) {
            Alert::warning('Vous ne pouvez sélectionner que 6 images.');
            // Flashy::warning('Vous ne pouvez sélectionner que jusqu\'à 6 images.');
            return redirect()->back()->withErrors(['images' => 'Vous ne pouvez sélectionner que jusqu\'à 6 images.']);
        }

        $livreur = Livreur::create([
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'contact' => $request->contact,
            'nom_societe' => $request->nom_societe,
            'presentation' => $request->presentation,
            // 'image_profil' => $request->image_profil,
            // 'image_couverture' => $request->image_couverture,
            'localisation' => $request->location,
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
            'description1' => $request->description1,
            'servicename1' => $request->servicename1,
            'description2' => $request->description2,
            'servicename2' => $request->servicename2,
            'description3' => $request->description3,
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

            'lundi_ferme' => $request->lundi_ferme,
            'mardi_ferme' => $request->mardi_ferme,
            'mercredi_ferme' => $request->mercredi_ferme,
            'jeudi_ferme' => $request->jeudi_ferme,
            'vendredi_ferme' => $request->vendredi_ferme,
            'samedi_ferme' => $request->samedi_ferme,
            'dimanche_ferme' => $request->dimanche_ferme,
        ]);

        if ($request->CNI) {
            $CNI = $request->CNI;
            $CNIName = $CNI->getClientOriginalName();
            if (!File::exists('docs/' . $CNIName)) {
                $request->CNI->move('docs', $CNIName);
            }

            $livreur->update([
                'CNI' => $CNIName,
            ]);
        }
        if ($request->residence) {
            $residence = $request->residence;
            $residenceName = $residence->getClientOriginalName();
            if (!File::exists('docs/' . $residenceName)) {
                $request->residence->move('docs', $residenceName);
            }

            $livreur->update([
                'residence' => $residenceName,
            ]);
        }



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
                // $image = $request->image;
                $imageName = $image->getClientOriginalName();
                if (!File::exists('images/' . $imageName)) {
                    $image->move('images', $imageName);
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
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($livreur)
    {
        $ipAddress = request()->ip();
        $visitDate = now()->toDateString();

        $existingVisit = Visit::where('ip_address', $ipAddress)
                                ->where('livreur_id', $livreur)
                                ->whereDate('visit_date', $visitDate)
                                ->first();

        if (!$existingVisit) {
            Visit::create([
                'livreur_id' => $livreur,
                'ip_address' => $ipAddress,
                'visit_date' => $visitDate,
            ]);
        }

        $livreur = Livreur::find($livreur);
        $livreur->avis = Avis::where('livreur_id', $livreur->id)->get();

        return view('details', compact('livreur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($livreur)
    {
        $livreur = Livreur::where('user_id', $livreur)->first();
        return view('dashboard.registerLivraison', compact('livreur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function toggleCertification(Request $request, $livreur)
    {
        $livreur = Livreur::find($livreur);
        if (Auth::user()->role != 3) {
            if ($request->refuser) {
                $livreur->update([
                    'certified' => $request->refuser
                ]);
            }else{
                if ($livreur->certified === 1) {
                    $livreur->update([
                        'certified' => 0
                    ]);
                    Alert::success($livreur->nom_societe." n'est plus certifié sur Deli");
                }else{
                    $livreur->update([
                        'certified' => 1
                    ]);
                    Alert::success($livreur->nom_societe.' est désormais certifié sur Deli');
                }
            }
        }else{
            if ($request->dfe && $request->rccm) {
                $dfe = $request->dfe;
                $dfeName = $dfe->getClientOriginalName();
                if (!File::exists('docs/' . $dfeName)) {
                    $request->dfe->move('docs', $dfeName);
                }
                $rccm = $request->rccm;
                $rccmName = $rccm->getClientOriginalName();
                if (!File::exists('docs/' . $rccmName)) {
                    $request->rccm->move('docs', $rccmName);
                }

                $livreur->update([
                    'certified' => 'en attente',
                    'dfe' => $dfeName,
                    'rccm' => $rccmName,
                ]);
                Alert::success('Votre demande de certification à bien été pris en compte');
                return redirect()->route('dashboard');
            }
        }

        return redirect()->back();
    }

    public function search(Request $request){

        $query = Livreur::query();

        $query->where('valide', 1);

        if ($request->location) {
            $query->where('nom_societe', 'like', '%'.$request->searchTerm.'%');
        }
        if ($request->location) {
            $query->where('localisation', 'like', $request->location);
        }
        if ($request->note) {
            $query->where('avgNote', '>=', $request->note);
        }

        $livreurs = $query->paginate(10);
        foreach ($livreurs as $livreur) {
            $livreur->avis = Avis::where('livreur_id', $livreur->id)->get();
        }
        $pubPicture = Avis::find(99)->pubPicture;
        $research = true;
        $searchTerm = $request->searchTerm;

        return view('welcome', compact('livreurs', 'research', 'pubPicture', 'searchTerm'));
    }

    public function validation(Request $request, $livreur)
    {
        $livreur = Livreur::find($livreur);
        if (Auth::user()->role != 3) {

            if ($request->disallow) {
                $livreur->update([
                    'valide' => $request->disallow
                ]);
            } else {
                $livreur->update([
                    'valide' => 1
                ]);
            }

        }
        Alert::success($livreur->nom_societe." est désormais disponible.");
        return redirect()->back();
    }

    public function update(Request $request, $livreur)
    {
        $livreur = Livreur::find($livreur);

        // dd($request->images);

        if ($request->images && count($request->images) > 6) {
            Alert::warning('Vous ne pouvez sélectionner que 6 images.');
            // Flashy::warning('Vous ne pouvez sélectionner que jusqu\'à 6 images.');
            return redirect()->back()->withErrors(['images' => 'Vous ne pouvez sélectionner que jusqu\'à 6 images.']);
        }

        if(!$livreur) {
            $livreur = Livreur::create([
                'user_id' => Auth::user()->id,
                'email' => $request->email,
                'contact' => $request->contact,
                'nom_societe' => $request->nom_societe,
                'presentation' => $request->presentation,
                // 'image_profil' => $request->image_profil,
                // 'image_couverture' => $request->image_couverture,
                'localisation' => $request->location,
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
                'description1' => $request->description1,
                'servicename1' => $request->servicename1,
                'description2' => $request->description2,
                'servicename2' => $request->servicename2,
                'description3' => $request->description3,
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

                'lundi_ferme' => $request->lundi_ferme,
                'mardi_ferme' => $request->mardi_ferme,
                'mercredi_ferme' => $request->mercredi_ferme,
                'jeudi_ferme' => $request->jeudi_ferme,
                'vendredi_ferme' => $request->vendredi_ferme,
                'samedi_ferme' => $request->samedi_ferme,
                'dimanche_ferme' => $request->dimanche_ferme,
            ]);
            Alert::success('votre société à été ajouté avec succès');
        }else{
            $livreur->update([
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'nom_societe' => $request->nom_societe,
                'presentation' => $request->presentation,
                // 'image_profil' => $request->image_profil,
                // 'image_couverture' => $request->image_couverture,
                'localisation' => $request->location,
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
                'description1' => $request->description1,
                'servicename1' => $request->servicename1,
                'description2' => $request->description2,
                'servicename2' => $request->servicename2,
                'description3' => $request->description3,
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

                'lundi_ferme' => $request->lundi_ferme,
                'mardi_ferme' => $request->mardi_ferme,
                'mercredi_ferme' => $request->mercredi_ferme,
                'jeudi_ferme' => $request->jeudi_ferme,
                'vendredi_ferme' => $request->vendredi_ferme,
                'samedi_ferme' => $request->samedi_ferme,
                'dimanche_ferme' => $request->dimanche_ferme,
            ]);
            Alert::success('votre société à été mis à jours avec succès');
        }


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
                // $image = $request->image;
                $imageName = $image->getClientOriginalName();
                if (!File::exists('images/' . $imageName)) {
                    $image->move('images', $imageName);
                }
                $imagesList[] = $imageName;
            }
            $imagesListString = implode(', ', $imagesList);

            $livreur->update([
                'images' => $imagesListString,
            ]);
        }

        // Flashy::success($request->nom_societe.' à été enregistré avec succès');
        return redirect()->back();

    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($livreur)
    {
       $livreur = Livreur::find($livreur);

       if (Auth::user()->role != 3 || Auth::user()->id == $livreur->user_id) {
            if($livreur->CNI) {
                if (File::exists('docs/' . $livreur->CNI)) {
                    File::delete('docs/' . $livreur->CNI);
                }
            }
            if($livreur->residence) {
                if (File::exists('docs/' . $livreur->residence)) {
                    File::delete('docs/' . $livreur->residence);
                }
            }

            if($livreur->dfe) {
                if (File::exists('docs/' . $livreur->dfe)) {
                    File::delete('docs/' . $livreur->dfe);
                }
            }
            if($livreur->registre_commerce) {
                if (File::exists('docs/' . $livreur->registre_commerce)) {
                    File::delete('docs/' . $livreur->registre_commerce);
                }
            }


            if($livreur->image_profil) {
                if (File::exists('images/' . $livreur->image_profil)) {
                    File::delete('images/' . $livreur->image_profil);
                }
            }
            if($livreur->image_couverture) {
                if (File::exists('images/' . $livreur->image_couverture)) {
                    File::delete('images/' . $livreur->image_couverture);
                }
            }
            if($livreur->servicePicture1) {
                if (File::exists('images/' . $livreur->servicePicture1)) {
                    File::delete('images/' . $livreur->servicePicture1);
                }
            }
            if($livreur->servicePicture2) {
                if (File::exists('images/' . $livreur->servicePicture2)) {
                    File::delete('images/' . $livreur->servicePicture2);
                }
            }
            if($livreur->servicePicture3) {
                if (File::exists('images/' . $livreur->servicePicture3)) {
                    File::delete('images/' . $livreur->servicePicture3);
                }
            }

            if($livreur->images) {
                $imagesList = explode(', ', $livreur->images);
                foreach ($imagesList as $image) {
                    if (File::exists('images/' . $image)) {
                        File::delete('images/' . $image);
                    }
                }
            }

            $livreur->delete();
            Alert::success('Société supprimé avec succès');
        }else{
            Alert::error("Vous n'avez pas l'autorisation de supprimer cette Société");
        }

        return redirect()->back();
    }
}
