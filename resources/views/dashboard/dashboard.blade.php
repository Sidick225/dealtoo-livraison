@extends('dashboard.model')

@section('content')

    <h3 class="text-3xl font-medium text-gray-700">Tableau de bord</h3>


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

            <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-orange-600" type="text"
                id="rechercheInput"
                placeholder="Search">
        </div>
        @endsection

    @endif

        <div class="mt-4">
            <div class="flex flex-wrap -mx-6">

                @if (Auth::user()->role != 3)
                    <div class="w-full px-6 sm:w-1/2 xl:w-1/2">
                        <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                            <div class="p-3 bg-indigo-600 bg-opacity-75 rounded-full">
                                <svg class="w-8 h-8 text-white" viewBox="0 0 28 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">{{count($livreurs)}}</h4>
                                <div class="text-gray-500">société(s) enregistrée(s)</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/2 sm:mt-0">
                        <div onclick="filtreElements('certifié')" style="cursor: pointer" class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                            <div class="p-3 bg-orange-600 bg-opacity-75 rounded-full">
                                <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z"
                                        fill="currentColor"></path>
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
                @else
                <a class="ms-auto" href="registerLivreur"><button type="submit" class="flex float-right focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">
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
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
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

                            <tr data-title="{{$livreur->nom_societe}} {{$livreur->servicename1}} {{$livreur->servicename2}} {{$livreur->servicename3}} {{$livreur->localisation}} @if($livreur->certified == 1) certifié @endif">
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
                                        @else
                                        <span
                                            class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                            En attente d'authorisation
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
                                                <svg class="ms-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
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
                                    @elseif (Auth::user()->role != 3)
                                        <a href="/registerLivreur/{{$livreur->id}}"><button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                            Modifier
                                        </button></a>
                                        <br>
                                    @endif
                                    <a href="{{route('livreurs.show', $livreur->id)}}">
                                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                            Voir plus
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
        function filtreElements(element){
            var searchInput = document.getElementById('rechercheInput');
            var liste = document.getElementById('listeLivreur');
            var items = liste.getElementsByTagName('tr');

            searchInput.value = 'certifié';
            searchInput.focus();

            Array.from(items).forEach(function(item) {
                var dataTitle = item.dataset.title.toLowerCase();
                if (dataTitle.includes(element)) {
                    item.style.display = 'table-row';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
@endsection