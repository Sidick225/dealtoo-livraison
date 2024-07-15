<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livreurs - Deli</title>
        <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        @include('layouts.header')
        <div class="container">
            <form class="searchwrapper" action="/search" method="POST">
                @csrf
                <div class="searchbox">
                    <div class="row">
                    {{-- <div class="col-md-2 aBorder">
                        <select class="form-control category">
                            <option>Société</option>
                            <option>Particulier</option>
                        </select>
                    </div> --}}
                    <div class="col-md-4 aBorder">
                        {{-- <select class="form-control category">
                            <option>Spécification de note</option>
                            <option>note >= 4</option>
                            <option>note >= 3</option>
                            <option>note >= 2</option>
                            <option>note >= 1</option>
                        </select> --}}
                        <input type="text" name="searchTerm" class="form-control" placeholder="Recherche">
                    </div>
                    <div class="col-md-3 aBorder">
                        <select class="form-control category" name="note">
                            <option value=''>Spécification de note</option>
                            <option value="4">note >= 4</option>
                            <option value="3">note >= 3</option>
                            <option value="2">note >= 2</option>
                            <option value="1">note >= 1</option>
                        </select>
                        {{-- <input type="text" class="form-control" placeholder="Recherche"> --}}
                    </div>
                    <div class="col-md-3">
                        <select class="form-control category" name="location">
                            <option value=''>Tout les pays</option>
                            <option>Algérie</option>
                            <option>Angola</option>
                            <option>Bénin</option>
                            <option>Botswana</option>
                            <option>Burkina Faso</option>
                            <option>Burundi</option>
                            <option>Cameroun</option>
                            <option>Cap-Vert</option>
                            <option>République centrafricaine</option>
                            <option>Tchad</option>
                            <option>Comores</option>
                            <option>Congo</option>
                            <option>République démocratique du Congo</option>
                            <option>Djibouti</option>
                            <option>Égypte</option>
                            <option>Guinée équatoriale</option>
                            <option>Érythrée</option>
                            <option>Éthiopie</option>
                            <option>Gabon</option>
                            <option>Gambie</option>
                            <option>Ghana</option>
                            <option>Guinée</option>
                            <option>Guinée-Bissau</option>
                            <option>Côte d'Ivoire</option>
                            <option>Kenya</option>
                            <option>Lesotho</option>
                            <option>Libéria</option>
                            <option>Libye</option>
                            <option>Madagascar</option>
                            <option>Malawi</option>
                            <option>Mali</option>
                            <option>Mauritanie</option>
                            <option>Maurice</option>
                            <option>Maroc</option>
                            <option>Mozambique</option>
                            <option>Namibie</option>
                            <option>Niger</option>
                            <option>Nigeria</option>
                            <option>Rwanda</option>
                            <option>Sénégal</option>
                            <option>Seychelles</option>
                            <option>Sierra Leone</option>
                            <option>Somalie</option>
                            <option>Afrique du Sud</option>
                            <option>Soudan du Sud</option>
                            <option>Soudan</option>
                            <option>Tanzanie</option>
                            <option>Togo</option>
                            <option>Tunisie</option>
                            <option>Ouganda</option>
                            <option>Zambie</option>
                            <option>Zimbabwe</option>
                        </select>
                        {{-- <select class="form-control" id="villes" name="villes">
                            <option>Abidjan</option>
                            <option>Bouaké</option>
                            <option>Yamoussoukro</option>
                            <option>San-Pédro</option>
                            <option>Daloa</option>
                            <option>Man</option>
                            <option>Korhogo</option>
                            <option>Odienné</option>
                            <option>Divo</option>
                            <option>Gagnoa</option>
                        </select> --}}
                        {{-- <input type="text" class="form-control" placeholder="Où ?"> --}}
                    </div>
                    <div class="col-md-2"><input type="submit" class="btn btn-warning" class="form-control" value="Chercher" style="float: right"></div>
                    </div>
                </div>
            </form>
        </div>






        <section class="pub">

        </section>


        <section class="content">
            <h1 style="margin-bottom:20px">
                Les meilleures sociétés de livraison et courrier express
            </h1>

            <p>
                Avec le développement du commerce en ligne en Côte d’Ivoire, se faire livrer un colis à domicile ou sur son lieu de travail est devenu une pratique courante pour de nombreux utilisateurs. Face à la demande de plus en plus croissante, les sociétés de livraison à Abidjan et en Côte d’Ivoire ont développé une formule express pour répondre aux cas urgents. Pour les entreprises, c’est une solution logistique très utile pour la satisfaction des clients. Vous recherchez un prestataire fiable pour vos besoins de livraison rapide ? Les meilleures sociétés de livraison express sont sur Go Africa Online.
            </p>
            <br>
            <section id="livreursAffichage" class="row">
                <div class="col-md-8" style="">
                    @isset ($research)
                        <script>
                            window.onload = function() {
                                var sectionToScrollTo = '#livreursAffichage';
                                var element = document.querySelector(sectionToScrollTo);
                                if(element) {
                                    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                                }
                            }
                        </script>
                        <div class="d-flex">
                            <h5>Résultats de votre recherche {{$searchTerm?'\"'.$searchTerm.'\"':''}}</h5>
                            <a href="/" class="ms-auto text-xl btn btn-warning">
                                <i class="bi bi-x-lg"></i> &nbsp; fermer la recherche
                            </a>
                        </div>
                        @if (count($livreurs) == 0)
                            <br><br>
                            <p class="text-center">Aucune société ne correspond à votre recherche. Veuillez revoir vos critères.</p>
                        @endif
                        <br>
                    @endisset

                    @foreach ($livreurs as $livreur)
                        @if ($livreur->avis->count() > 0)
                            @php
                                $totalNotes = $livreur->avis->sum('note');
                                $averageNote = ($totalNotes / ($livreur->avis->count() * 5)) * 5;
                            @endphp
                        @else
                            @php
                                $averageNote = 0;
                            @endphp
                        @endif
                        <div class="row mb-3 cardC">
                            <div class="col-md-2 p-2">
                                <img src="{{'images/'.$livreur->image_profil}}" alt="" width="100%; text-align:center">

                                <div style="position: absolute;bottom:15px; font-weight:bolder">
                                    Note: {{number_format($averageNote, 1)}}/5
                                </div>
                            </div>
                            <div class="col-md-10 card p-0">
                                <div class="card-header">
                                    <a href="{{route('livreurs.show', $livreur->id)}}" style="text-decoration: unset; color:unset">
                                        <h2>{{$livreur->nom_societe}}
                                            @if ($livreur->certified == 1)
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                            </svg>
                                            @endif
                                        </h2>
                                    </a>
                                    <div class="d-flex">
                                        @php
                                            Carbon\Carbon::setLocale('fr');
                                            $dateActuelle = Carbon\Carbon::now();
                                            $jourDeLaSemaine = $dateActuelle->isoFormat('dddd');
                                        @endphp
                                        @if ($livreur->{$jourDeLaSemaine . '_ferme'})
                                            <button type="button" class="btn btn-danger btn-sm">Fermé</button>
                                        @else
                                            <button type="button" class="btn btn-success btn-sm">Ouvert</button>
                                        @endif
                                        {{-- <div class="dropdown">
                                            <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Ouvert
                                            </button>
                                            <table class="dropdown-menu table table">
                                                <tbody>
                                                    <tr>
                                                        <td>Jeudi</td>
                                                        <td class="text-center">@if($livreur->jeudi_ferme) Fermé @else {{$livreur->jeudi_heure_debut}} - {{$livreur->jeudi_heure_fin}} @endif</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> --}}
                                        <p class="mx-3 d-flex text-black mb-0 ms-auto" style="font-weight: bolder">
                                            <i class="bi bi-phone"></i><span class="ms-2">{{$livreur->mobile1}}</span>
                                        </p>
                                    </div>

                                </div>
                                <div class="card-body">
                                <blockquote class="blockquote mb-0 row">
                                    <div class="d-flex">
                                        {{-- <i class="bi bi-geo-alt"></i> --}}
                                        <div class="mx-3" style="max-width:80%">
                                            <p class="text-black" style="font-size:15px !important">
                                                {{$livreur->presentation}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="ms-3 row">
                                        <a href="{{route('livreurs.show', $livreur->id)}}" style="text-decoration: unset; color:unset; display: contents;"><div class="col-md-4 d-flex clikable-item">
                                            <span class="py-1" style="border-radius: 50%; border:1px solid rgb(255, 208, 0); padding-inline:10px">
                                                {{-- <i class="bi bi-geo-alt"></i> --}}
                                                <i class="bi bi-file-earmark-text-fill" style="color: rgb(255, 208, 0)"></i>
                                            </span>
                                            <p class="m-2" style="font-size:15px !important">Voir la fiche</p>
                                        </div></a>
                                        <a href="{{$livreur->map_link}}" style="text-decoration: unset; color:unset; display: contents;"><div class="col-md-4 d-flex clikable-item">
                                            <span class="py-1" style="border-radius: 50%; border:1px solid rgb(255, 208, 0); padding-inline:10px">
                                                <i class="bi bi-geo-alt-fill" style="color: rgb(255, 208, 0)"></i>
                                            </span>
                                            <p class="m-2" style="font-size:15px !important">Localisation</p>
                                        </div></a>
                                        <a href="{{$livreur->site_web}}" style="text-decoration: unset; color:unset; display: contents;"><div class="col-md-4 d-flex clikable-item">
                                            <span class="py-1" style="border-radius: 50%; border:1px solid rgb(255, 208, 0); padding-inline:10px">
                                                <i class="bi bi-globe-europe-africa" style="color: rgb(255, 208, 0)"></i>
                                            </span>
                                            <p class="m-2" style="font-size:15px !important">Site web</p>
                                        </div></a>
                                    </div>
                                    {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                                </blockquote>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <br><br>
                    <div style="text-align:center">{{ $livreurs->links('vendor.pagination.bootstrap-4') }}</div>

                </div>
                @if (count($livreurs) > 1)
                <div id="sideBox" class="sideBox col-md-3 ms-auto" style="height:90vh; background-image: url('{{asset('images').'/'.$pubPicture}}'); background-position:center; background-size:cover">
                    <br><br>
                </div>
                @endif
            </section>
        </section>

        @include('layouts.footer')

        <div style="position: relative;">
            <div id="sideBoxBottom" class="sideBox col-md-3 d-none" style="height:90vh; background-image: url('{{asset('images').'/'.$pubPicture}}'); background-position:center; background-size:cover">
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
        @include('sweetalert::alert')
    </body>
</html>
