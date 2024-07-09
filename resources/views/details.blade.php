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
    </head>
    <body>
        @include('layouts.header')

        <section class="content">
            @foreach ($livreurs as $livreur)
                @if ($livreur['id'] == $data)
                    <div class="card p-0">
                        <div class="card-body detailHeader" style="background-image: url('{{$livreur['background']}}');display: inline-block; box-sizing: border-box;">
                        </div>
                    </div>
                    <div class="profilImage">
                        <img src="{{$livreur['image']}}" alt="">
                        <div class="row">
                            <button type="button" class="btn btn-success btn-sm">Ouvert <i class="bi bi-chevron-down"></i></button>
                            {{-- <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <h1 style="margin-top:-40px"> {{$livreur['name']}} </h1>
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
                                            <div class="px-2 my-2 d-flex">
                                                <i class="bi bi-geo-alt" style="color: orange"></i>
                                                <p class="ms-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus deserunt molestias totam quidem eligendi sed, et veritatis a accusamus.</p>
                                            </div>
                                            <div class="px-2 my-2 d-flex">
                                                <i class="bi bi-globe" style="color: orange"></i>
                                                <p class="ms-3">www.dealtoo.co</p>
                                            </div>
                                            <div class="px-2 my-2 d-flex">
                                                <i class="mx-2 bi bi-facebook" style="font-size:20px; color: blue"></i>
                                                <i class="mx-2 bi bi-instagram" style="font-size:20px; color: rgb(202, 6, 104)"></i>
                                                <i class="mx-2 bi bi-whatsapp" style="font-size:20px; color: rgb(9, 201, 9)"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul style="list-style: none">
                                                <li><i class="bi bi-telephone"></i> &nbsp; 0768250140</li>
                                                <li><i class="bi bi-telephone"></i> &nbsp; 0768250140</li>
                                                <li><i class="bi bi-telephone"></i> &nbsp; 0768250140</li>
                                                <br>
                                                <li> <i class="bi bi-phone"></i> &nbsp; 0768250140</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-0 mt-3 mb-2" style="border-radius: 10px;">
                                <div class="card-body" style="">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.037545209473!2d-3.9973777254662184!3d5.411252935089229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1949b3cc05c7f%3A0x94e211ec451564f8!2sLyc%C3%A9e%20Victor%20Lobad!5e0!3m2!1sfr!2sci!4v1720439875841!5m2!1sfr!2sci" style="border:0; width:100%; height:250px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                            <div class="card p-0 mt-5 mb-2" id="services" style="border-radius: 10px;">
                                <div class="card-body" style="">
                                    <h3 class="my-4">Services</h3>
                                    <div class="d-flex" style="overflow-x:auto">
                                        <div class="card">
                                            <img class="card-img-top" src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" alt="Card image cap">
                                            <div class="card-body p-1">
                                            <p class="card-title text-center text-sm">Service</p>
                                            </div>
                                        </div>
                                        <div class="ms-2 card">
                                            <img class="card-img-top" src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" alt="Card image cap">
                                            <div class="card-body p-1">
                                            <p class="card-title text-center text-sm">Service</p>
                                            </div>
                                        </div>
                                        <div class="ms-2 card">
                                            <img class="card-img-top" src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" alt="Card image cap">
                                            <div class="card-body p-1">
                                            <p class="card-title text-center text-sm">Service</p>
                                            </div>
                                        </div>
                                        <div class="ms-2 card">
                                            <img class="card-img-top" src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" alt="Card image cap">
                                            <div class="card-body p-1">
                                            <p class="card-title text-center text-sm">Service</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card p-0 mt-5 mb-2" id="multimedia" style="border-radius: 10px;">
                                <div class="card-body">
                                    <h3 class="my-4">Multimédia</h3>
                                    <div class="container mt-5">
                                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="https://thumbs.dreamstime.com/b/papillon-monarque-orange-et-fleurs-lumineuses-d-%C3%A9t%C3%A9-dans-un-contexte-de-verdure-bleu-jardin-fey-photo-macro-artistique-167030287.jpg" class="d-block w-100" alt="Slide 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://burst.shopifycdn.com/photos/monarch-pollinates-wildflower.jpg?width=1000&format=pjpg&exif=0&iptc=0" class="d-block w-100" alt="Slide 2">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://assets.monica.im/tools-web/_next/static/media/imageGeneratorFeatureIntro1.9f5e7e23.webp" class="d-block w-100" alt="Slide 3">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://miro.medium.com/v2/resize:fit:1400/1*pZ3_Co30mzJb2xdPjDvD3w.jpeg" class="d-block w-100" alt="Slide 4">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="https://blog-fr.orson.io/wp-content/uploads/2017/06/jpeg-ou-png.jpg" class="d-block w-100" alt="Slide 5">
                                                </div>
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
                                                <img src="https://thumbs.dreamstime.com/b/papillon-monarque-orange-et-fleurs-lumineuses-d-%C3%A9t%C3%A9-dans-un-contexte-de-verdure-bleu-jardin-fey-photo-macro-artistique-167030287.jpg" alt="Thumbnail 1" class="img-fluid active" data-target="#carouselExample" data-slide-to="0">
                                                <img src="https://burst.shopifycdn.com/photos/monarch-pollinates-wildflower.jpg?width=1000&format=pjpg&exif=0&iptc=0" alt="Thumbnail 2" class="img-fluid" data-target="#carouselExample" data-slide-to="1">
                                                <img src="https://assets.monica.im/tools-web/_next/static/media/imageGeneratorFeatureIntro1.9f5e7e23.webp" alt="Thumbnail 3" class="img-fluid" data-target="#carouselExample" data-slide-to="2">
                                                <img src="https://miro.medium.com/v2/resize:fit:1400/1*pZ3_Co30mzJb2xdPjDvD3w.jpeg" alt="Thumbnail 4" class="img-fluid" data-target="#carouselExample" data-slide-to="3">
                                                <img src="https://blog-fr.orson.io/wp-content/uploads/2017/06/jpeg-ou-png.jpg" alt="Thumbnail 5" class="img-fluid" data-target="#carouselExample" data-slide-to="4">
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
                                            <td class="text-center">8h00 - 18h00</td>
                                          </tr>
                                          <tr style="font-weight:bolder">
                                            <td>Mardi</td>
                                            <td class="text-center">8h00 - 18h00</td>
                                          </tr>
                                          <tr>
                                            <td>Mercredi</td>
                                            <td class="text-center">8h00 - 18h00</td>
                                          </tr>
                                          <tr>
                                            <td>Jeudi</td>
                                            <td class="text-center">8h00 - 18h00</td>
                                          </tr>
                                          <tr>
                                            <td>Vendredi</td>
                                            <td class="text-center">8h00 - 18h00</td>
                                          </tr>
                                          <tr>
                                            <td>Samedi</td>
                                            <td class="text-center">Fermé</td>
                                          </tr>
                                          <tr>
                                            <td>Dimanche</td>
                                            <td class="text-center">Fermé</td>
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

                                        <button type="button" class="btn btn-warning btn-lg" style="float: right">Envoyer <i class="bi bi-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endforeach

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
    </body>
</html>

