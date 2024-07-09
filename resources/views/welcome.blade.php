<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livreurs - Dealtoo</title>
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
    </head>
    <body>
        @include('layouts.header')


        <section class="pub">

        </section>


        <section class="content">
            <h1 style="margin-bottom:20px" data-aos="zoom-in" data-aos-duration="1000">
                Les meilleures sociétés de livraison et courrier express à Abidjan et en Côte d’Ivoire
            </h1>

            <p>
                Avec le développement du commerce en ligne en Côte d’Ivoire, se faire livrer un colis à domicile ou sur son lieu de travail est devenu une pratique courante pour de nombreux utilisateurs. Face à la demande de plus en plus croissante, les sociétés de livraison à Abidjan et en Côte d’Ivoire ont développé une formule express pour répondre aux cas urgents. Pour les entreprises, c’est une solution logistique très utile pour la satisfaction des clients. Vous recherchez un prestataire fiable pour vos besoins de livraison rapide ? Les meilleures sociétés de livraison express sont sur Go Africa Online.
            </p>

            <br><br>
            <section class="row">
                <div class="col-md-8" style="">
                    @foreach ($livreurs as $livreur)

                        <div class="row mb-3 cardC" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="col-md-2 p-2">
                                <img src="{{$livreur['image']}}" alt="" width="100%; text-align:center">
                            </div>
                            <div class="col-md-10 card p-0">
                                <div class="card-header">
                                    <a href="/detail/{{$livreur['id']}}" style="text-decoration: unset; color:unset">
                                        <h2>{{$livreur['name']}}</h2>
                                    </a>
                                    <div class="d-flex">
                                        {{-- <button type="button" class="btn btn-success btn-sm">Ouvert <i class="bi bi-chevron-down"></i></button> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Ouvert
                                            </button>
                                            {{-- <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#">Action</a></li>
                                              <li><a class="dropdown-item" href="#">Another action</a></li>
                                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul> --}}

                                            <table class="dropdown-menu table table">
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
                                        <p class="mx-3 d-flex text-black mb-0 ms-auto" style="font-weight: bolder">
                                            <i class="bi bi-phone"></i><span class="ms-2">0768250140</span>
                                        </p>
                                    </div>

                                </div>
                                <div class="card-body">
                                <blockquote class="blockquote mb-0 row">
                                    <div class="d-flex">
                                        {{-- <i class="bi bi-geo-alt"></i> --}}
                                        <div class="mx-3" style="max-width:80%">
                                            <p class="text-black" style="font-size:15px !important">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="ms-3 row">
                                        <a href="/detail/{{$livreur['id']}}" style="text-decoration: unset; color:unset; display: contents;"><div class="col-md-4 d-flex clikable-item">
                                            <span class="py-1" style="border-radius: 50%; border:1px solid orange; padding-inline:10px">
                                                {{-- <i class="bi bi-geo-alt"></i> --}}
                                                <i class="bi bi-file-earmark" style="color: orange"></i>
                                            </span>
                                            <p class="m-2" style="font-size:15px !important">Voir la fiche</p>
                                        </div></a>
                                        <div class="col-md-4 d-flex clikable-item">
                                            <span class="py-1" style="border-radius: 50%; border:1px solid orange; padding-inline:10px">
                                                <i class="bi bi-geo-alt" style="color: orange"></i>
                                            </span>
                                            <p class="m-2" style="font-size:15px !important">Localisation</p>
                                        </div>
                                        <div class="col-md-4 d-flex clikable-item">
                                            <span class="py-1" style="border-radius: 50%; border:1px solid orange; padding-inline:10px">
                                                <i class="bi bi-globe" style="color: orange"></i>
                                            </span>
                                            <p class="m-2" style="font-size:15px !important">Site web</p>
                                        </div>
                                    </div>
                                    {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                                </blockquote>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
                <div id="sideBox" class="col-md-3 ms-auto">
                    <br><br>
                    <h1>ifneybune</h1>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                </div>
            </section>
        </section>

        @include('layouts.footer')

        <div style="position: relative;">
            <div id="sideBoxBottom" class="col-md-3 d-none">
                <br><br>
                <h1>ifneybune</h1>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
                <br><br>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- <script src="{{asset('assets/js/script.js')}}"></script> --}}
        <script>
            var fixedElement = document.getElementById('sideBox');
            var sideBoxBottom = document.getElementById('sideBoxBottom');
            const targetElement = document.getElementById('endOfFile');
            // Obtenir la position de l'élément par rapport au haut de la page
            // var fixedElementTop = fixedElement.offsetTop;

            // Gérer le scroll
            window.addEventListener('scroll', function() {
                // Obtenir la position verticale actuelle de la fenêtre
                var scrollPosition = window.scrollY || window.pageYOffset;
                var windowHeight = window.innerHeight;
                // Vérifier si on a fait défiler jusqu'à l'élément à fixer
                if (scrollPosition >= windowHeight * 1) {
                    fixedElement.classList.add('fixee');
                } else {
                    fixedElement.classList.remove('fixee');
                }
            });




            // Détecter le scroll
            window.addEventListener('scroll', function() {


                const elementTop = targetElement.getBoundingClientRect().top;

                // Position actuelle de défilement de la fenêtre
                const scrollPosition = window.scrollY;

                // Hauteur de la fenêtre visible
                const viewportHeight = window.innerHeight;

                // Condition pour vérifier si l'élément est visible
                if (elementTop < viewportHeight && elementTop > 0) {
                    fixedElement.classList.add('fixeebottom');
                    fixedElement.classList.remove('fixee');
                    sideBoxBottom.classList.remove('d-none');
                } else {
                    fixedElement.classList.remove('fixeebottom');
                    fixedElement.classList.add('fixed');
                    sideBoxBottom.classList.add('d-none');
                }

            })
        </script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
