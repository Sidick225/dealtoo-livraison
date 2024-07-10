<?php

use App\Models\Livreur;
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
    $livreurs = Livreur::paginate(10);
    // $livreurs = [
    //     [
    //         'id' => 1,
    //         'name' => 'Rapid Livraison',
    //         'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMDH5QOEpiIdTZcIf8NEFvxwqscTvlSqwShw&s',
    //         'background' => 'https://ehonline.eu/wp-content/uploads/2020/07/livraison-restauration-rapide.jpg',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Super Livraison',
    //         'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
    //         'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
    //     ]
    // ];
    return view('welcome', compact('livreurs'));
})->name('welcome');

// Route::get('/detail/{data}', function ($data) {
//     $livreurs = [
//         [
//             'id' => 1,
//             'name' => 'Rapid Livraison',
//             'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMDH5QOEpiIdTZcIf8NEFvxwqscTvlSqwShw&s',
//             'background' => 'https://ehonline.eu/wp-content/uploads/2020/07/livraison-restauration-rapide.jpg',
//         ],
//         [
//             'id' => 2,
//             'name' => 'Super Livraison',
//             'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
//             'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
//         ]
//     ];
//     return view('details', compact('data', 'livreurs'));
// });

Route::get('/registerLivreur', function () {
    return view('registerLivraison');
})->name('registerLivreur');

Route::get('demande_certification', function () {

})->name('demande_certification');



Route::resource('livreurs', LivreurController::class);
Route::resource('services', ServicesController::class);
Route::resource('Avis', AvisController::class);
Route::resource('messages', MessagesController::class);




Route::get('/dashboard', function () {
    $livreurs = Livreur::all();
    return view('dashboard.dashboard', compact('livreurs'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
