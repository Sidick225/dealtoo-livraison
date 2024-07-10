<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Détails livreurs - Dealtoo</title>
        <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <style>
            a{
                text-decoration: unset;
                color: unset;
            }
            a:hover{
                text-decoration: unset;
                color: unset;
            }
        </style>
    </head>
    <body>
        @include('layouts.header')

        <section class="content">
            {{-- @foreach ($livreurs as $livreur)
                @if ($livreur['id'] == $data) --}}
                    <div class="card p-0">
                        <div class="card-body detailHeader" style="background-image: url('{{asset('images') .'/'.$livreur->image_couverture}}');display: inline-block; box-sizing: border-box;">
                        </div>
                    </div>
                    <div class="profilImage">
                        <img src="{{asset('images') .'/'.$livreur->image_profil}}" alt="">
                        <div class="row">
                            {{-- <button type="button" class="btn btn-success btn-sm">Ouvert <i class="bi bi-chevron-down"></i></button> --}}
                            <div class="dropdown" style="bottom: 15px; left: 10px;">
                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Ouvert
                                </button>
                                <table class="dropdown-menu table table">
                                    <tbody>
                                        <tr>
                                            <td>Lundi</td>
                                            <td class="text-center">{{$livreur->lundi_heure_debut}}- {{$livreur->lundi_heure_fin}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mardi</td>
                                            <td class="text-center">{{$livreur->mardi_heure_debut}} - {{$livreur->mardi_heure_fin}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mercredi</td>
                                            <td class="text-center">{{$livreur->mercredi_heure_debut}} - {{$livreur->mercredi_heure_fin}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jeudi</td>
                                            <td class="text-center">{{$livreur->jeudi_heure_debut}} - {{$livreur->jeudi_heure_fin}}</td>
                                        </tr>
                                        <tr>
                                            <td>Vendredi</td>
                                            <td class="text-center">{{$livreur->vendredi_heure_debut}} - {{$livreur->vendredi_heure_fin}}</td>
                                        </tr>
                                        <tr>
                                            <td>Samedi</td>
                                            <td class="text-center">{{$livreur->samedi_heure_debut}} - {{$livreur->samedi_heure_fin}}</td>
                                        </tr>
                                        <tr>
                                            <td>Dimanche</td>
                                            <td class="text-center">{{$livreur->dimanche_heure_debut}} - {{$livreur->dimanche_heure_fin}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <h1 style="margin-top:-40px"> {{$livreur->name}} </h1>
                    <br>

                    <div class="d-flex p-2" id="fixedElement" style="overflow-x: auto">
                        <div class="my-2">
                            <a href="#coordonnees"><button type="button" class="btn navbtn btn-sm">Coordonnées</button></a>
                        </div>
                        <div class="ms-5 my-2">
                            <a href="#services"><button type="button" class="btn navbtn btn-sm">Services</button></a>
                        </div>
                        <div class="ms-5 my-2">
                            <a href="#multimedia"><button type="button" class="btn navbtn btn-sm">Multimédia</button></a>
                        </div>
                        <div class="ms-5 my-2">
                            <a href="#horaires"><button type="button" class="btn navbtn btn-sm">Horaires</button></a>
                        </div>
                        <div class="ms-5 my-2">
                            <a href="#avis"><button type="button" class="btn navbtn btn-sm">Avis</button></a>
                        </div>
                    </div>




                    <section class="row">
                        <div class="col-md-8">
                            <div class="card p-0 mt-5 mb-2" id="coordonnees" style="border-radius: 10px">
                                <div class="card-body" style="">
                                    <h3 class="my-4">Coordonnées</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <a href="{{$livreur->map_link}}"><div class="px-2 my-2 d-flex">
                                                <i class="bi bi-geo-alt" style="color: orange"></i>
                                                <p class="ms-3">{{$livreur->localisation}}</p>
                                            </div></a>
                                            <a href=""><div class="px-2 my-2 d-flex">
                                                <i class="bi bi-globe" style="color: orange"></i>
                                                <p class="ms-3">{{$livreur->site_web}}</p>
                                            </div></a>
                                            <div class="px-2 my-2 d-flex">
                                                <a href="{{$livreur->facebook}}"><i class="mx-2 bi bi-facebook" style="font-size:20px; color: blue"></i></a>
                                                <a href="{{$livreur->instagram}}"><i class="mx-2 bi bi-instagram" style="font-size:20px; color: rgb(202, 6, 104)"></i></a>
                                                <a href="https://api.whatsapp.com/send?phone={{$livreur->whatsapp}}"><i class="mx-2 bi bi-whatsapp" style="font-size:20px; color: rgb(9, 201, 9)"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul style="list-style: none">
                                                <li><i class="bi bi-telephone"></i> &nbsp; {{$livreur->fixe1}}</li>
                                                <li><i class="bi bi-telephone"></i> &nbsp; {{$livreur->fixe2}}</li>
                                                <br>
                                                <li><i class="bi bi-phone"></i> &nbsp; {{$livreur->mobile1}}</li>
                                                <li> <i class="bi bi-phone"></i> &nbsp; {{$livreur->mobile2}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-0 mt-3 mb-2" style="border-radius: 10px;">
                                <div class="card-body" style="">
                                    {{$livreur->map}}
                                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.037545209473!2d-3.9973777254662184!3d5.411252935089229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1949b3cc05c7f%3A0x94e211ec451564f8!2sLyc%C3%A9e%20Victor%20Lobad!5e0!3m2!1sfr!2sci!4v1720439875841!5m2!1sfr!2sci" style="border:0; width:100%; height:250px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                </div>
                            </div>

                            <div class="card p-0 mt-5 mb-2" id="services" style="border-radius: 10px;">
                                <div class="card-body" style="">
                                    <h3 class="my-4">Services</h3>
                                    <div class="d-flex" style="overflow-x:auto">
                                        @if ($livreur->servicePicture1)
                                            <div class="card">
                                                <img class="card-img-top" src="{{asset('images') .'/'.$livreur->servicePicture1}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                <p class="card-title text-center text-sm">{{$livreur->servicename1}}</p>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($livreur->servicePicture2)
                                            <div class="ms-2 card">
                                                <img class="card-img-top" src="{{asset('images') .'/'.$livreur->servicePicture2}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                <p class="card-title text-center text-sm">{{$livreur->servicename2}}</p>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($livreur->servicePicture3)
                                            <div class="ms-2 card">
                                                <img class="card-img-top" src="{{asset('images') .'/'.$livreur->servicePicture3}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                <p class="card-title text-center text-sm">{{$livreur->servicename3}}</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="card p-0 mt-5 mb-2" id="multimedia" style="border-radius: 10px;">
                                <div class="card-body">
                                    <h3 class="my-4">Multimédia</h3>
                                    <div class="container mt-5">
                                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                @php
                                                    $imagesList = explode(', ', $livreur->images);
                                                @endphp
                                                @foreach ($imagesList as $image)
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('images') .'/'. $image}}" class="d-block w-100" alt="Slide">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Précédent</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Suivant</span>
                                            </a>
                                        </div>

                                        <div class="row mt-3">
                                            <div id="carouselThumbnails" class="carousel-thumbnails pr-0">
                                                @foreach ($imagesList as $image)
                                                    <div class="carousel-item active">
                                                        @if ($loop->first)
                                                        <img src="{{asset('images') .'/'. $image}}" alt="Thumbnail " class="img-fluid active" data-target="#carouselExample" data-slide-to="0">
                                                        @else
                                                        <img src="{{asset('images') .'/'. $image}}" alt="Thumbnail " class="img-fluid" data-target="#carouselExample" data-slide-to="0">
                                                        @endif

                                                        {{-- <img src="{{asset('images') .'/'. $image}}" class="d-block w-100" alt="Slide"> --}}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-0 mt-5 mb-2" id="horaires" style="border-radius: 10px;">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="my-4">Nos horaires d'ouverture</h3>
                                        <div class="ms-auto" style="align-content:center;">
                                            <button type="button" class="btn btn-success btn-sm">Ouvert</button>
                                        </div>
                                    </div>
                                    <table class="table table">
                                        <tbody>
                                            <tr>
                                                <td>Lundi</td>
                                                <td class="text-center">{{$livreur->lundi_heure_debut}}- {{$livreur->lundi_heure_fin}}</td>
                                            </tr>
                                            <tr>
                                                <td>Mardi</td>
                                                <td class="text-center">{{$livreur->mardi_heure_debut}} - {{$livreur->mardi_heure_fin}}</td>
                                            </tr>
                                            <tr>
                                                <td>Mercredi</td>
                                                <td class="text-center">{{$livreur->mercredi_heure_debut}} - {{$livreur->mercredi_heure_fin}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jeudi</td>
                                                <td class="text-center">{{$livreur->jeudi_heure_debut}} - {{$livreur->jeudi_heure_fin}}</td>
                                            </tr>
                                            <tr>
                                                <td>Vendredi</td>
                                                <td class="text-center">{{$livreur->vendredi_heure_debut}} - {{$livreur->vendredi_heure_fin}}</td>
                                            </tr>
                                            <tr>
                                                <td>Samedi</td>
                                                <td class="text-center">{{$livreur->samedi_heure_debut}} - {{$livreur->samedi_heure_fin}}</td>
                                            </tr>
                                            <tr>
                                                <td>Dimanche</td>
                                                <td class="text-center">{{$livreur->dimanche_heure_debut}} - {{$livreur->dimanche_heure_fin}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card p-0 mt-5 mb-2" id="avis" style="border-radius: 10px;">
                                <div class="card-body">
                                    <h3 class="my-4">Donnez votre avis</h3>
                                    <p>Soyez le premier à donner votre avis sur cette société.</p>

                                    <div class="d-flex">
                                        <span class="p-2">Note</span>
                                        <div class="rating ms-5">
                                            <span style="font-size: 25px" onmouseover="highlightStars(1)" onmouseout="resetStars()" onclick="submitRating(1)">&#9734;</span>
                                            <span style="font-size: 25px" onmouseover="highlightStars(2)" onmouseout="resetStars()" onclick="submitRating(2)">&#9734;</span>
                                            <span style="font-size: 25px" onmouseover="highlightStars(3)" onmouseout="resetStars()" onclick="submitRating(3)">&#9734;</span>
                                            <span style="font-size: 25px" onmouseover="highlightStars(4)" onmouseout="resetStars()" onclick="submitRating(4)">&#9734;</span>
                                            <span style="font-size: 25px" onmouseover="highlightStars(5)" onmouseout="resetStars()" onclick="submitRating(5)">&#9734;</span>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="d-flex">
                                        <span>Votre avis</span>
                                        <div class="ms-4">
                                            <textarea class="form-control" name="" cols="30" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-warning btn-lg ml-5">Envoyer <i class="bi bi-send"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-0 mt-5" style="border-radius: 10px">
                                <div class="card-body" style="">
                                    <h4>Contactez {{$livreur['name']}}</h4>
                                    <br>
                                    <form action="">
                                        <select name="" id="" class="form-control mb-3">
                                            <option>Demande d'information</option>
                                            <option>Demande de devis</option>
                                            <option>Demande de rendez-vous</option>
                                            <option>Demande d'emploi</option>
                                        </select>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control mb-3" placeholder="Votre prénom *">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control mb-3" placeholder="Votre nom *">
                                            </div>
                                        </div>

                                        <input type="text" class="form-control mb-3" placeholder="Votre email *">
                                        <input type="text" class="form-control mb-3" placeholder="Votre numéro de téléphone *">
                                        <textarea name="" id="" rows="5" class="form-control mb-3" placeholder="Votre message"></textarea>

                                        <p>(* Champs obligatoires)</p>

                                        <button type="submit" class="btn btn-warning btn-lg" style="float: right">Envoyer <i class="bi bi-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

        </section>

        @include('layouts.footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script>
            // Sélectionner l'élément à fixer
            var fixedElement = document.getElementById('fixedElement');

            // Obtenir la position de l'élément par rapport au haut de la page
            // var fixedElementTop = fixedElement.offsetTop;

            // Gérer le scroll
            window.addEventListener('scroll', function() {
                // Obtenir la position verticale actuelle de la fenêtre
                var scrollPosition = window.scrollY || window.pageYOffset;
                var windowHeight = window.innerHeight;
                // Vérifier si on a fait défiler jusqu'à l'élément à fixer
                if (scrollPosition >= windowHeight * 0.95) {
                    fixedElement.classList.add('fixed');
                } else {
                    fixedElement.classList.remove('fixed');
                }
            });

        </script>
        @include('sweetalert::alert')
    </body>
</html>

