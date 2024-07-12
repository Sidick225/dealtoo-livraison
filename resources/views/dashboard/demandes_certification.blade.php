@extends('dashboard.model')


@section('content')

<h3 class="text-3xl font-medium text-gray-700">Demandes de certification</h3>


    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Sociétés</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Coordonnées</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Notes</th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Documents</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                    </thead>

                    <tbody id="listeLivreur" class="bg-white">
                        @foreach ($livreurs as $livreur)

                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-16 h-16">
                                        <img class="w-16 h-16 rounded-full"
                                            src="{{asset('images') .'/'.$livreur->image_profil}}"
                                            alt="Image de profil">
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
                                <div class="text-sm leading-5 text-gray-900">{{$livreur->mobile1}}</div>
                                <div class="text-sm leading-5 text-gray-500">{{$livreur->fixe1}}</div>
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
                                <div class="leading-5 text-gray-900"><strong>Note: </strong> {{number_format($averageNote, 1)}} / 5</div>
                                @if ($livreur->avis && count($livreur->avis) > 0)
                                <strong class="text-sm ">Dernier commentaire:</strong>
                                <div class="text-sm leading-5 text-gray-900">
                                    {{$livreur->avis->last()->comment}}
                                </div>
                                @endif
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="leading-5 text-gray-900">
                                    <a target="_blank" href="{{asset('docs').'/'.$livreur->dfe}}" style="text-decoration: underline; color:blue">
                                        DFE
                                    </a>
                                </div>
                                <br>
                                <div class="leading-5 text-gray-900">
                                    <a target="_blank" href="{{asset('docs').'/'.$livreur->rccm}}" style="text-decoration: underline; color:blue">
                                        RCCM
                                    </a>
                                </div>
                            </td>

                            <td
                                class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="{{route('avis.show', $livreur->id)}}">
                                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-1 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                                        Voir plus de commentaire
                                    </button>
                                </a>
                                <br>
                                <form action="{{route('toggleCertification', $livreur->id)}}" method="post" onsubmit="return confirm('êtes vous sur de vouloir certifier cette société de livraison ?');">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="flex float-right focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">
                                        Certifier
                                        <svg class="ms-2 w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                          </svg>

                                    </button>
                                </form>
                                <form id="refuseForm" action="{{route('toggleCertification', $livreur->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="refuserField" name="refuser">
                                    <button type="submit" class="flex float-right focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        Refuser &nbsp;
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                    <script>
                                        document.getElementById('refuseForm').addEventListener('submit', function(event) {
                                            event.preventDefault();
                                            var contenuPrompt = prompt('Raison du refus :');
                                            if (contenuPrompt !== null) {
                                                document.getElementById('refuserField').value = contenuPrompt;
                                                this.submit();
                                            }
                                        });
                                    </script>
                                </form>

                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
