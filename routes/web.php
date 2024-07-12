<?php

use App\Models\Avis;
use App\Models\Visit;
use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\LivreurController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ServicesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $livreurs = Livreur::where('valide', 1)->paginate(10);
    foreach ($livreurs as $livreur) {
        $livreur->avis = Avis::where('livreur_id', $livreur->id)->get();
    }
    $pubPicture = Avis::find(99)->pubPicture;
    return view('welcome', compact('livreurs', 'pubPicture'));
})->name('welcome');


Route::get('/registerLivreur/{livreur?}', function ($livreur = null) {
    if ($livreur) {
        $livreur = Livreur::find(intval($livreur));
    }
    return view('dashboard.registerLivraison', compact('livreur'));
})->name('registerLivreur');


Route::get('demande_certification', function () {
    $livreurs = Livreur::where('certified', 'en attente')->get();
    foreach ($livreurs as $livreur) {
        $livreur->avis = Avis::where('livreur_id', $livreur->id)->get();
    }

    return view('dashboard.demandes_certification', compact('livreurs'));
})->name('demande_certification');


Route::get('create_demande_certification/{livreur_id}', function ($livreur_id) {
    $livreur = Livreur::find(intval($livreur_id));

    return view('dashboard.demande_certification', compact('livreur'));
})->name('create_demande_certification');


Route::get('publicite', function () {
    $pubPictureTable = Avis::find(99);
    return view('dashboard.publicite', compact('pubPictureTable'));
})->name('publicite');
Route::post('pubImageStore', function (Request $request) {
    if ($request->pubPicture) {
        $pubPictureTable = Avis::find(99);

        $pubPicture = $request->pubPicture;
        $pubPictureName = $pubPicture->getClientOriginalName();
        if (!File::exists('images/' . $pubPictureName)) {
            $request->pubPicture->move('images', $pubPictureName);
        }
        $pubPictureTable->update([
            'pubPicture' => $pubPictureName,
        ]);
    }
    Alert::success('Image de publicité modifié avec succès');
    return redirect()->back();
})->name('pubImageStore');


Route::put('toggleCertification/{livreur}', [LivreurController::class, 'toggleCertification'])->name('toggleCertification');
Route::put('validation/{livreur}', [LivreurController::class, 'validation'])->name('validation');

Route::resource('livreurs', LivreurController::class);
Route::resource('services', ServicesController::class);
Route::resource('avis', AvisController::class);
Route::resource('messages', MessagesController::class);




Route::get('/dashboard', function () {
    if (Auth::user()->role != 3) {
        $livreurs = Livreur::orderBy('valide', 'asc')->get();
    }else{
        $livreurs = Livreur::where('user_id', Auth::user()->id)->get();
    }
    if (count($livreurs) > 0) {
        foreach ($livreurs as $livreur) {
            $livreur->avis = Avis::where('livreur_id', $livreur->id)->get();
            $livreur->nbVisiteurs = Visit::where('livreur_id', $livreur->id)->count();
        }
    }

    return view('dashboard.dashboard', compact('livreurs'));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
