@extends('dashboard.model')

@section('content')

    @if (Auth::user()->role != 3)
        <h3 class="text-3xl font-medium text-gray-700">Administration Deli</h3>
    @else
        <h3 class="text-3xl font-medium text-gray-700">Tableau de bord</h3>
    @endif

    @if (count($livreurs) > 5)

        @section('search')
        <div class="relative mx-4 lg:mx-0">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </span>

            <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-yellow-600" type="text"
                id="rechercheInput"
                placeholder="Search">
        </div>
        @endsection

    @endif

        <div class="mt-4">
            <div class="flex flex-wrap -mx-6">

                @if (Auth::user()->role != 3)
                    <div class="w-full px-6 sm:w-1/4 xl:w-1/4">
                        <div onclick="filtreElements('total')" id="total" class="flex items-center px-2 py-2 bg-white rounded-md shadow-sm">
                            <div class="p-3 bg-black rounded-full">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"/>
                                  </svg>

                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">{{count($livreurs)}}</h4>
                                <div class="text-gray-500">société(s) enregistrée(s)</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-6 mt-6 sm:w-1/4 xl:w-1/4 sm:mt-0">
                        <div onclick="filtreElements('certifiee')" id="certifiee" style="cursor: pointer" class="flex items-center px-2 py-2 bg-white rounded-md shadow-sm">
                            <div class="p-3 bg-yellow-500 rounded-full">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                  </svg>

                            </div>

                            <div class="mx-5">
                                @php
                                    $nbrCertified = 0;
                                @endphp
                                @foreach ($livreurs as $livreur)
                                    @if ($livreur->certified == 1)
                                        @php
                                            $nbrCertified +=1;
                                        @endphp
                                    @endif
                                @endforeach
                                <h4 class="text-2xl font-semibold text-gray-700">{{$nbrCertified}}</h4>
                                <div class="text-gray-500">sociétées certifiées</div>
                            </div>
                        </div>
                    </div>


                    <div class="w-full px-6 sm:w-1/4 xl:w-1/4">
                        <div onclick="filtreElements('nonValide')" id="nonValide" style="cursor: pointer; background:rgb(255, 200, 0)"  class="flex items-center px-2 py-2 bg-white rounded-md shadow-sm">
                            <div class="p-3 bg-black rounded-full">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H8Zm7 0a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1Z" clip-rule="evenodd"/>
                                  </svg>

                            </div>

                            <div class="mx-5">
                                @php
                                    $nbrNonValide = 0;
                                @endphp
                                @foreach ($livreurs as $livreur)
                                    @if ($livreur->valide == 0)
                                        @php
                                            $nbrNonValide +=1;
                                        @endphp
                                    @endif
                                @endforeach
                                <h4 class="text-2xl font-semibold text-gray-700">{{$nbrNonValide}}</h4>
                                <div class="text-gray-500">société(s) en attente</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-6 mt-6 sm:w-1/4 xl:w-1/4 sm:mt-0">
                        <div onclick="filtreElements('valide')" id="valide" style="cursor: pointer" class="flex items-center px-2 py-2 bg-white rounded-md shadow-sm">
                            <div class="p-3 bg-yellow-500 rounded-full">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.6 5.2A1 1 0 0 0 7 6v12a1 1 0 0 0 1.6.8l8-6a1 1 0 0 0 0-1.6l-8-6Z" clip-rule="evenodd"/>
                                  </svg>

                            </div>

                            <div class="mx-5">
                                @php
                                    $nbrValide = 0;
                                @endphp
                                @foreach ($livreurs as $livreur)
                                    @if ($livreur->valide == 1)
                                        @php
                                            $nbrValide +=1;
                                        @endphp
                                    @endif
                                @endforeach
                                <h4 class="text-2xl font-semibold text-gray-700">{{$nbrValide}}</h4>
                                <div class="text-gray-500">société(s) authorisée(s)</div>
                            </div>
                        </div>
                    </div>
                @else
                    <a class="ms-auto" href="registerLivreur"><button type="submit" class="flex float-right focus:outline-none text-white bg-yellow-500 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-500 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-500 dark:hover:bg-yellow-500 dark:focus:ring-yellow-500">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                            </path>
                        </svg>
                        &nbsp;
                        Ajouter une société de livraison
                    </button></a>
                @endif

                {{-- <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                    <div class="flex items-center px-2 py-2 bg-white rounded-md shadow-sm">
                        <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                            <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor"
                                    stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                <path
                                    d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                    stroke="currentColor" stroke-width="2"></path>
                            </svg>
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                            <div class="text-gray-500">Available Products</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="mt-8">

        </div>

        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Nom de société</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Coordonnées</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Note et Avis</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Statut</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>

                        <tbody id="listeLivreur" class="bg-white">
                            @foreach ($livreurs as $livreur)

                            <tr data-title="{{$livreur->nom_societe}} {{$livreur->servicename1}} {{$livreur->servicename2}} {{$livreur->servicename3}} {{$livreur->localisation}} @if($livreur->valide == 1) valide @else nonValide @endif @if($livreur->certified == 1) certifiee @endif">
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full"
                                                src="{{asset('images').'/'.$livreur->image_profil}}"
                                                alt="Image de profil {{$livreur->nom_societe}}">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">{{$livreur->nom_societe}}
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">{{$livreur->email}}</div>
                                            <div class="text-sm leading-5 text-gray-500">{{$livreur->localisation}}</div>
                                            <div class="text-sm leading-5 text-gray-500">{{$livreur->site_web}}</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{$livreur->fixe1}}</div>
                                    <div class="text-sm leading-5 text-gray-500">{{$livreur->mobile1}}</div>
                                    <br>
                                    <a href="{{route('livreurs.show', $livreur->id)}}">
                                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                            Voir la fiche société
                                        </button>
                                    </a>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
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

                                    <div class="text-sm leading-5 text-gray-900">{{$livreur->nbVisiteurs}} Visite(s)</div>
                                    <br>
                                    <div class="text-sm leading-5 text-gray-900">
                                        <b>Note: </b>
                                        {{number_format($averageNote, 1)}} / 5</div>
                                    <br>
                                    <a href="{{route('avis.show', $livreur->id)}}">
                                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-1 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                            Commentaires ({{count($livreur->avis)}})
                                        </button>
                                    </a>
                                </td>

                                <td
                                    class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                    @if ($livreur->valide == 1)
                                        <span
                                            class="inline-flex  px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            Authorisé sur Deli
                                        </span>
                                    @elseif ($livreur->valide == 0)
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                            En attente d'authorisation
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                            Non authorisé:
                                            <br>
                                            {{$livreur->valide}}
                                        </span>
                                    @endif
                                    <br><br>
                                    @if ($livreur->certified == 1)
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            Certifié
                                            <svg class="ms-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                            </svg>
                                        </span>
                                        @elseif ($livreur->certified == 'en attente')
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                            En attente de certification
                                        </span>
                                        @elseif ($livreur->certified == 0)
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-800 bg-gray-100 rounded-full">
                                            Non certifié
                                        </span>
                                        @if (Auth::user()->role == 3)
                                            <br><br>
                                            <a href="/create_demande_certification/{{$livreur->id}}"><button type="button" class="flex focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">
                                                Demander une certification
                                                <svg class="ms-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                                </svg>
                                            </button></a>
                                        @endif

                                    @else
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-800 bg-red-100 rounded-full">
                                            Certification réfusé:
                                        </span><br>
                                        {{$livreur->certified }}
                                        <br>
                                        <a href="/create_demande_certification/{{$livreur->id}}" style="color: blue; text-decoration:underline">
                                            Redemander une certification
                                        </a>
                                    @endif

                                </td>

                                <td
                                    class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">

                                    @if (Auth::user()->role != 3 && $livreur->valide === 0)
                                        <form action="/validation/{{$livreur->id}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">
                                                Authoriser
                                            </button>
                                        </form>
                                        <form id="validationForm" action="/validation/{{$livreur->id}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" id="disallow" name="disallow">
                                            <button type="submit" class="focus:outline-none text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900">
                                                Ne pas authoriser
                                            </button>
                                        </form>
                                        <script>
                                            document.getElementById('validationForm').addEventListener('submit', function(event) {
                                                event.preventDefault();
                                                var contenuPrompt = prompt('Raison du rejet :');
                                                if (contenuPrompt !== null) {
                                                    document.getElementById('disallow').value = contenuPrompt;
                                                    this.submit();
                                                }
                                            });
                                        </script>
                                    @elseif (Auth::user()->id == $livreur->user_id)
                                        <a href="/registerLivreur/{{$livreur->id}}"><button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                            Modifier
                                        </button></a>
                                        <br>
                                    @endif
                                    <a href="{{route('messages.show', $livreur->id)}}">
                                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                            Messages ({{$livreur->messages}})
                                        </button>
                                    </a>
                                    <br>
                                    <form action="{{route('livreurs.destroy', $livreur->id)}}" method="post" onsubmit="return confirm('êtes vous sur de vouloir supprimer cette société de livraison ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                            Supprimer
                                        </button>
                                    </form>
                                    @if (Auth::user()->role != 3 && $livreur->certified === 1)
                                        <br>
                                        <form action="{{route('toggleCertification', $livreur->id)}}" method="post" onsubmit="return confirm('êtes vous sur de vouloir révoquer la certification de cette société de livraison ?');">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Révoquer la certificartion
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <script>

            document.getElementById('rechercheInput').addEventListener('input', function() {
                var recherche = this.value.toLowerCase();
                var liste = document.getElementById('listeLivreur');
                var items = liste.getElementsByTagName('tr');

                Array.from(items).forEach(function(item) {
                    var dataTitle = item.dataset.title.toLowerCase();
                    if (dataTitle.includes(recherche)) {
                        item.style.display = 'table-row';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });




        </script>

    {{-- @else --}}


    {{-- @endif --}}

    <script>
        (function filtreElementsOwn(element = 'nonvalide'){
            // var searchInput = document.getElementById('rechercheInput');
            var liste = document.getElementById('listeLivreur');
            var items = liste.getElementsByTagName('tr');

            Array.from(items).forEach(function(item) {
                var dataTitle = item.dataset.title.toLowerCase();
                if (dataTitle.includes(element)) {
                    item.style.display = 'table-row';
                } else {
                    item.style.display = 'none';
                }
            });
        })()
        function filtreElements(element){
            var liste = document.getElementById('listeLivreur');
            var items = liste.getElementsByTagName('tr');

            const array = ['certifiee', 'nonValide', 'valide', 'total'];
            array.forEach(arrayElement => {
                if (element == arrayElement) {
                    document.getElementById(arrayElement).style.background = 'rgb(255, 200, 0)';
                }else{
                    document.getElementById(arrayElement).style.background = 'white';
                }
            });

            if (element == 'total') {
                Array.from(items).forEach(function(item) {
                    item.style.display = 'table-row';
                });
            }else{
                Array.from(items).forEach(function(item) {
                    var dataTitle = item.dataset.title.toLowerCase();
                    if (new RegExp('\\b' + element + '\\b', 'i').test(dataTitle)) {
                        item.style.display = 'table-row';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        }
    </script>
    <style>
        .madou{
            color: rgb(255, 200, 0)
        }
    </style>
@endsection
