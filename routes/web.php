<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $livreurs = [
        [
            'id' => 1,
            'name' => 'Rapid Livraison',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMDH5QOEpiIdTZcIf8NEFvxwqscTvlSqwShw&s',
            'background' => 'https://ehonline.eu/wp-content/uploads/2020/07/livraison-restauration-rapide.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ]
    ];
    return view('welcome', compact('livreurs'));
});

Route::get('/detail/{data}', function ($data) {
    $livreurs = [
        [
            'id' => 1,
            'name' => 'Rapid Livraison',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMDH5QOEpiIdTZcIf8NEFvxwqscTvlSqwShw&s',
            'background' => 'https://ehonline.eu/wp-content/uploads/2020/07/livraison-restauration-rapide.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Super Livraison',
            'image' => 'https://lequotidien.sn/wp-content/uploads/2020/04/livreur-equitation-illustration-scooter-rouge.jpg',
            'background' => 'https://blog-assets.lightspeedhq.com/img/2021/05/e70fa235-optimising-your-delivery-service-with-data-fr.png'
        ]
    ];
    return view('details', compact('data', 'livreurs'));
});
