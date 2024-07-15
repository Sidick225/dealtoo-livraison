@extends('dashboard.model')

@section('content')

    @isset ($livreur)


        <h3 class="text-3xl font-medium text-gray-700">Modifier la société</h3>

        <div class="mt-4">
            {{-- <div class="flex flex-wrap -mx-6">

                <div class="w-full px-6 sm:w-1/3 xl:w-1/3">
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
                            <h4 class="text-2xl font-semibold text-gray-700">{{$livreur->nbVisiteurs?$livreur->nbVisiteurs:0}}</h4>
                            <div class="text-gray-500">visite(s)</div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-6 mt-6 sm:w-1/3 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                        <div class="p-3 bg-orange-600 bg-opacity-75 rounded-full">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                </svg>
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">Certification</h4>
                            <div class="text-gray-500">
                                @if($livreur->certified === 1)
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                    Certifié
                                </span>
                                @elseif($livreur->certified === 'en attente')
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                    En attente
                                </span>
                                @else
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                    Non certifié
                                </span>
                                @endif
                            </div>
                        </div>
                        @if ($livreur->certified == 0)
                            <div class="ms-auto">
                                <form action="{{route('toggleCertification', $livreur->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                        Demander une certificartion
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>

                    <div class="w-full px-6 mt-6 sm:w-1/3 xl:w-1/3 xl:mt-0">
                        <a href="{{route('avis.show', Auth::user()->id)}}">
                            <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 10.5h.01m-4.01 0h.01M8 10.5h.01M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.6a1 1 0 0 0-.69.275l-2.866 2.723A.5.5 0 0 1 8 18.635V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                                    </svg>
                                </div>
                                <div class="mx-5">
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
                                    <h4 class="text-2xl font-semibold text-gray-700">{{number_format($averageNote, 1)}} / 5</h4>
                                    <div class="text-gray-500">{{count($livreur->avis)}} avis</div>
                                </div>
                            </div>
                        </a>
                    </div>

            </div> --}}
        </div>

        <div class="mt-8">

        </div>

        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                    <form method="post" action="{{route('livreurs.update', $livreur->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">

                                <div class="col-span-full">
                                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Image de couverture</label>
                                    <div id="backgroundPreviewc" class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-20" style="background-image:url('{{asset('images') .'/'.$livreur->image_couverture}}');background-size: cover; background-position:center">
                                        <br>
                                        <div id="toHide" class="text-center">
                                            <div class="mt-4 flex text-sm leading-6 text-gray-600" style="justify-content: center;">
                                            <label for="image_couverture" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>
                                                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" clip-rule="evenodd"/>
                                                    </svg>
                                                </span>
                                                <input id="image_couverture" name="image_couverture" type="file" accept="image/*" class="sr-only">
                                            </label>
                                            </div>
                                            <p class="text-xs leading-5 text-gray-600">Selectionnez une image</p>
                                        </div>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-span-full" style="margin-top: -70px">
                                    {{-- <label for="photo" class="block text-sm font-medium leading-6 text-gray-900 px-2" style="background-color: white; width:fit-content">Photo de profil</label> --}}
                                    <div class="mt-2 relative items-center gap-x-3" style="width: fit-content;">
                                        <img id="profilePreview" src="{{asset('images') .'/'.$livreur->image_profil}}" alt="" style="width: 150px; height:150px; object-fit:cover; object-position:center; border-radius:50%">
                                        {{-- <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Ajouter</button> --}}
                                        {{-- <input type="file" accept="image/*" name="image_profil" id="image_profil" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"> --}}
                                        <label for="image_profil" style="position: absolute; bottom: 0; right: 0; z-index: 99; background: white; border-radius: 5px; cursor: pointer;">
                                            <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" clip-rule="evenodd"/>
                                            </svg>
                                            <input id="image_profil" name="image_profil" type="file" accept="image/*" class="sr-only">
                                        </label>

                                    </div>
                                </div>

                                {{-- <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="nom_societe" class="block text-sm font-medium leading-6 text-gray-900">Nom de société</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="text" name="nom_societe" id="nom_societe" value="" autocomplete="nom_societe" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="Nom de votre société de livraison">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="pays" class="block text-sm font-medium leading-6 text-gray-900">Pays d'exercice</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <select name="pays" id="pays" class="px-2 block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                                    <option value=''>Choisir un pays</option>
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
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-span-full">
                                        <label for="presentation" class="block text-sm font-medium leading-6 text-gray-900">Présentation</label>
                                        <div class="mt-2">
                                        <textarea id="presentation" name="presentation" rows="3"
                                        placeholder="presentez brievement votre société de livraison"
                                        class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{$livreur->presentation}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-b border-gray-900/10 pb-12">
                                {{-- <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p> --}}

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="CNI" class="block text-sm font-medium leading-6 text-gray-900">Carte Nationale d'identité</label>
                                        <div class="mt-2">
                                        <input id="CNI" name="CNI" value="" type="file" accept=".pdf, image/jpeg, image/png" autocomplete="CNI" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="residence" class="block text-sm font-medium leading-6 text-gray-900">Certificat de résidence ou facture CIE / SODECI</label>
                                        <div class="mt-2">
                                            <input id="residence" name="residence" value="" type="file" accept="image/*" autocomplete="residence" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3 mt-4">
                                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">localisation</label>
                                        <div class="mt-2">
                                        <input id="location" name="location" value="{{$livreur->localisation}}" type="location" autocomplete="location" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="Où êtes vous situé ?">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3 mt-4">
                                        <label for="site_web" class="block text-sm font-medium leading-6 text-gray-900">Site web</label>
                                        <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
                                            <input type="text" name="site_web" id="site_web" autocomplete="site_web"
                                            value="{{$livreur->site_web}}"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Entrez l'adresse de votre site web">
                                        </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adresse email</label>
                                        <div class="mt-2">
                                        <input type="text" name="email" id="email" autocomplete="email"
                                        placeholder="Votre adresse email"
                                        value="{{$livreur->email}}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2 sm:col-start-1">
                                        <label for="facebook" class="block text-sm font-medium leading-6 text-gray-900">Lien facebook</label>
                                        <div class="mt-2">
                                        <input type="text" name="facebook" id="facebook"
                                        placeholder="Entrez le lien de votre page Facebook"
                                        autocomplete="address-level2"
                                        value="{{$livreur->facebook}}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="instagram" class="block text-sm font-medium leading-6 text-gray-900">Lien Instagram</label>
                                        <div class="mt-2">
                                        <input type="text" name="instagram" id="instagram"
                                        placeholder="Entrez le lien de votre page Instagram"
                                        autocomplete="address-level1"
                                        value="{{$livreur->instagram}}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="whatsapp" class="block text-sm font-medium leading-6 text-gray-900">Numéro Whatsapp</label>
                                        <div class="mt-2">
                                        <input type="text" name="whatsapp" id="whatsapp"
                                        placeholder="Entre votre numéro Whatsapp"
                                        autocomplete="whatsapp"
                                        value="{{$livreur->whatsapp}}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-3">
                                        <label for="fixe1" class="block text-sm font-medium leading-6 text-gray-900">Numéro fix 1</label>
                                        <div class="mt-2">
                                        <input type="text" name="fixe1" id="fixe1"
                                        autocomplete="fixe1"
                                        value="{{$livreur->fixe1}}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="fixe2" class="block text-sm font-medium leading-6 text-gray-900">Numéro fix 2</label>
                                        <div class="mt-2">
                                        <input type="text" name="fixe2" id="fixe2"
                                        value="{{$livreur->fixe2}}"
                                        autocomplete="fixe2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="mobile1" class="block text-sm font-medium leading-6 text-gray-900">Numéro mobile 1</label>
                                        <div class="mt-2">
                                        <input type="text" name="mobile1"
                                        id="mobile1" autocomplete="mobile1"
                                        value="{{$livreur->mobile1}}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="mobile2" class="block text-sm font-medium leading-6 text-gray-900">Numéro mobile 2</label>
                                        <div class="mt-2">
                                        <input type="text" name="mobile2"
                                        value="{{$livreur->mobile2}}"
                                        id="mobile2" autocomplete="mobile2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-3">
                                        <label for="map_link" class="block text-sm font-medium leading-6 text-gray-900">Entrer le lien google map de votre lcoalisation</label>
                                        <div class="mt-2">
                                        <input type="text" name="map_link" id="map_link"
                                        value="{{$livreur->map_link}}"
                                        autocomplete="map_link"
                                        placeholder="Dans partager votre localisation copié le lien"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="html_map" class="block text-sm font-medium leading-6 text-gray-900">Entrer le HTML de google map de votre lcoalisation</label>
                                        <div class="mt-2">
                                        <input type="text" name="html_map" id="html_map"
                                        value="{{$livreur->map}}"
                                        placeholder="Dans partager votre localisation copié dans 'integré une carte'"
                                        autocomplete="html_map"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-full">
                                        <label for="images" class="block text-sm font-medium leading-6 text-gray-900">Quelques images de présentation</label>
                                        <div class="mt-2">
                                        <input type="file" accept="image/*" multiple="true" name="images[]" id="images"
                                        placeholder="Selectionnez quelques images de votre société"
                                        autocomplete="images"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                        @php
                                            $imagesList = explode(', ', $livreur->images);
                                        @endphp
                                        <div class="flex">
                                            @foreach ($imagesList as $image)
                                                <img src="{{asset('images') .'/'. $image}}" style="width:100px" class="d-block mx-2" alt="Slide">
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Services</h2>
                            {{-- <p class="mt-1 text-sm leading-6 text-gray-600">Si vosu proposez d'autres services</p> --}}

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <div class="max-w-sm bg-gray-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="servicePicture1"
                                        name="servicePicture1"
                                        type="file" accept="image/*">
                                        <img id="preview1" class="rounded-t-lg mx-auto mt-2" src="{{asset('images') .'/'.$livreur->servicePicture1}}" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                                        <div class="p-2">
                                            <input
                                            type="text"
                                            name="servicename1"
                                            id="servicename1"
                                            value="{{$livreur->servicename1}}"
                                            autocomplete="postal-code"
                                            placeholder="titre du service"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            {{-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5> --}}
                                            <textarea name="description1" id="description1" class="px-2 mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            rows="2"
                                            placeholder="Descritpion du service">{{$livreur->description1}}</textarea>
                                            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-sm bg-gray-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="servicePicture2"
                                        name="servicePicture2"
                                        type="file" accept="image/*">
                                        <img id="preview2" class="rounded-t-lg mx-auto mt-2" src="{{asset('images') .'/'.$livreur->servicePicture2}}" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                                        <div class="p-2">
                                            <input
                                            type="text"
                                            name="servicename2"
                                            id="servicename2"
                                            autocomplete="postal-code"
                                            placeholder="titre du service"
                                            value="{{$livreur->servicename2}}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            {{-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5> --}}
                                            <textarea name="description2" id="description2" class="px-2 mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            rows="2"
                                            placeholder="Descritpion du service">{{$livreur->description2}}</textarea>
                                            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-sm bg-gray-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="servicePicture3"
                                        name="servicePicture3"
                                        type="file" accept="image/*">
                                        <img id="preview3" class="rounded-t-lg mx-auto mt-2" src="{{asset('images') .'/'.$livreur->servicePicture3}}" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                                        <div class="p-2">
                                            <input
                                            type="text"
                                            name="servicename3"
                                            id="servicename3"
                                            value="{{$livreur->servicename3}}"
                                            autocomplete="postal-code"
                                            placeholder="titre du service"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            {{-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5> --}}
                                            <textarea name="description3" id="description3" class="px-2 mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            rows="2"
                                            placeholder="Descritpion du service">{{$livreur->description3}}</textarea>
                                            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Calendier</h2>
                            {{-- <p class="mt-1 text-sm leading-6 text-gray-600">quelles sont vos horaires</p> --}}

                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th class="mx-4 text-black px-2 py-1">
                                                Jours
                                            </th>
                                            <th class="text-center text-black px-2 py-1">
                                                Heure de début et de fin
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Lundi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="lundi_heure_debut" value="{{$livreur->lundi_heure_debut}}" name="lundi_heure_debut" required><br>
                                                <input type="time" id="lundi_heure_fin" value="{{$livreur->lundi_heure_fin}}" name="lundi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="lundi_ferme" @if($livreur->lundi_ferme) checked @endif name="lundi_ferme">
                                                <label for="lundi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Mardi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="mardi_heure_debut" value="{{$livreur->mardi_heure_debut}}" name="mardi_heure_debut" required><br>
                                                <input type="time" id="mardi_heure_fin" value="{{$livreur->mardi_heure_fin}}" name="mardi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="mardi_ferme" @if($livreur->mardi_ferme) checked @endif name="mardi_ferme">
                                                <label for="mardi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Mercredi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="mercredi_heure_debut" value="{{$livreur->mercredi_heure_debut}}" name="mercredi_heure_debut" required><br>
                                                <input type="time" id="mercredi_heure_fin" value="{{$livreur->mercredi_heure_fin}}" name="mercredi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="mercredi_ferme" @if($livreur->mercredi_ferme) checked @endif name="mercredi_ferme">
                                                <label for="mercredi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Jeudi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="jeudi_heure_debut" value="{{$livreur->jeudi_heure_debut}}" name="jeudi_heure_debut" required><br>
                                                <input type="time" id="jeudi_heure_fin" value="{{$livreur->jeudi_heure_fin}}" name="jeudi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="jeudi_ferme" @if($livreur->jeudi_ferme) checked @endif name="jeudi_ferme">
                                                <label for="jeudi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Vendredi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="vendredi_heure_debut" value="{{$livreur->vendredi_heure_debut}}" name="vendredi_heure_debut" required><br>
                                                <input type="time" id="vendredi_heure_fin" value="{{$livreur->vendredi_heure_fin}}" name="vendredi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="vendredi_ferme" @if($livreur->vendredi_ferme) checked @endif name="vendredi_ferme">
                                                <label for="vendredi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Samedi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="samedi_heure_debut" value="{{$livreur->samedi_heure_debut}}" name="samedi_heure_debut"><br>
                                                <input type="time" id="samedi_heure_fin" value="{{$livreur->samedi_heure_fin}}" name="samedi_heure_fin"><br>
                                                <input type="checkbox" value="1" id="samedi_ferme" @if($livreur->samedi_ferme) checked @endif name="samedi_ferme">
                                                <label for="samedi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Dimanche</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="dimanche_heure_debut" value="{{$livreur->dimanche_heure_debut}}" name="dimanche_heure_debut"><br>
                                                <input type="time" id="dimanche_heure_fin" value="{{$livreur->dimanche_heure_fin}}" name="dimanche_heure_fin"><br>
                                                <input type="checkbox" value="1" id="dimanche_ferme" @if($livreur->dimanche_ferme) checked @endif name="dimanche_ferme">
                                                <label for="dimanche_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <div class="mt-6 flex items-center justify-end gap-x-6">
                        {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Annuler</button> --}}
                        <button type="submit" style="position: fixed;bottom:20px;" class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Enregistrer</button>
                        </div>
                    </form>

                    <script>

                        // JavaScript pour gérer la sélection et l'affichage des images
                        $(document).ready(function() {
                            // Écouteurs d'événements pour les champs de fichier
                            $('#servicePicture1').change(function() {
                                previewImage(this, '#preview1');
                            });
                            $('#servicePicture2').change(function() {
                                previewImage(this, '#preview2');
                            });
                            $('#servicePicture3').change(function() {
                                previewImage(this, '#preview3');
                            });


                            $('#image_profil').change(function() {
                                previewImage(this, '#profilePreview');
                            });
                            $('#image_couverture').change(function() {
                                previewBackImage(this, '#backgroundPreviewc');
                                // $('#toHide').style.display = 'none';
                            });

                            // Fonction pour prévisualiser l'image sélectionnée
                            function previewImage(input, previewId) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        $(previewId).attr('src', e.target.result).show();
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            function previewBackImage(input, previewId) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        $(previewId).css('background-image', `url(${e.target.result})`);
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }

                        });
                    </script>

                </div>
            </div>
        </div>


    @else

        <h3 class="text-3xl font-medium text-gray-700">Ajouter une société</h3>

        <div class="mt-4">
            {{-- <div class="flex flex-wrap -mx-6">

                <div class="w-full px-6 sm:w-1/3 xl:w-1/3">
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
                            <h4 class="text-2xl font-semibold text-gray-700">{{$livreur->nbVisiteurs?$livreur->nbVisiteurs:0}}</h4>
                            <div class="text-gray-500">visite(s)</div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-6 mt-6 sm:w-1/3 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                        <div class="p-3 bg-orange-600 bg-opacity-75 rounded-full">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                </svg>
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">Certification</h4>
                            <div class="text-gray-500">
                                @if($livreur->certified === 1)
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                    Certifié
                                </span>
                                @elseif($livreur->certified === 'en attente')
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-yellow-800 bg-yellow-100 rounded-full">
                                    En attente
                                </span>
                                @else
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                    Non certifié
                                </span>
                                @endif
                            </div>
                        </div>
                        @if ($livreur->certified == 0)
                            <div class="ms-auto">
                                <form action="{{route('toggleCertification', $livreur->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
                                        Demander une certificartion
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>

                    <div class="w-full px-6 mt-6 sm:w-1/3 xl:w-1/3 xl:mt-0">
                        <a href="{{route('avis.show', Auth::user()->id)}}">
                            <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                                <div class="p-3 bg-pink-600 bg-opacity-75 rounded-full">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 10.5h.01m-4.01 0h.01M8 10.5h.01M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.6a1 1 0 0 0-.69.275l-2.866 2.723A.5.5 0 0 1 8 18.635V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                                    </svg>
                                </div>
                                <div class="mx-5">
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
                                    <h4 class="text-2xl font-semibold text-gray-700">{{number_format($averageNote, 1)}} / 5</h4>
                                    <div class="text-gray-500">{{count($livreur->avis)}} avis</div>
                                </div>
                            </div>
                        </a>
                    </div>

            </div> --}}
        </div>

        <div class="mt-8">

        </div>

        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">


                    <form method="POST" action="{{route('livreurs.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">

                                <div class="col-span-full">
                                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Image de couverture</label>
                                    <div id="backgroundPreviewc" class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-20" style="background-image:url('');background-size: cover; background-position:center">
                                        <br>
                                        <div id="toHide" class="text-center">
                                            <div class="mt-4 flex text-sm leading-6 text-gray-600" style="justify-content: center;">
                                            <label for="image_couverture" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>
                                                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd" d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" clip-rule="evenodd"/>
                                                    </svg>
                                                </span>
                                                <input id="image_couverture" name="image_couverture" type="file" accept="image/*" class="sr-only">
                                            </label>
                                            </div>
                                            <p class="text-xs leading-5 text-gray-600">Selectionnez une image</p>
                                        </div>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-span-full" style="margin-top: -70px">
                                    {{-- <label for="photo" class="block text-sm font-medium leading-6 text-gray-900 px-2" style="background-color: white; width:fit-content">Photo de profil</label> --}}
                                    <div class="mt-2 relative items-center gap-x-3" style="width: fit-content;">
                                        <img id="profilePreview" src="" alt="" style="width: 150px; height:150px; object-fit:cover; object-position:center; border-radius:50%">
                                        {{-- <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Ajouter</button> --}}
                                        {{-- <input type="file" accept="image/*" name="image_profil" id="image_profil" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"> --}}
                                        <label for="image_profil" style="position: absolute; bottom: 0; right: 0; z-index: 99; background: white; border-radius: 5px; cursor: pointer;">
                                            <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd" d="M7.5 4.586A2 2 0 0 1 8.914 4h6.172a2 2 0 0 1 1.414.586L17.914 6H19a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h1.086L7.5 4.586ZM10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z" clip-rule="evenodd"/>
                                            </svg>
                                            <input id="image_profil" name="image_profil" type="file" accept="image/*" class="sr-only">
                                        </label>

                                    </div>
                                </div>

                                {{-- <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="nom_societe" class="block text-sm font-medium leading-6 text-gray-900">Nom de société</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="text" name="nom_societe" id="nom_societe" value="" autocomplete="nom_societe" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="Nom de votre société de livraison">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="pays" class="block text-sm font-medium leading-6 text-gray-900">Pays d'exercice</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <select name="pays" id="pays" class="px-2 block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                                    <option value=''>Choisir un pays</option>
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
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full">
                                        <label for="presentation" class="block text-sm font-medium leading-6 text-gray-900">Présentation</label>
                                        <div class="mt-2">
                                        <textarea id="presentation" name="presentation" rows="3"
                                        placeholder="presentez brievement votre société de livraison"
                                        class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="border-b border-gray-900/10 pb-12">
                                {{-- <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p> --}}

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="CNI" class="block text-sm font-medium leading-6 text-gray-900">Carte Nationale d'identité (PDF)</label>
                                        <div class="mt-2">
                                        <input id="CNI" name="CNI" value="" type="file" accept="application/pdf" autocomplete="CNI" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="residence" class="block text-sm font-medium leading-6 text-gray-900">Certificat de résidence ou facture CIE / SODECI (PDF)</label>
                                        <div class="mt-2">
                                            <input id="residence" name="residence" value="" type="file" accept="application/pdf" autocomplete="residence" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3 mt-4">
                                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">localisation</label>
                                        <div class="mt-2">
                                        <input id="location" name="location" value="" type="text" autocomplete="location" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="Où êtes vous situé ?">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3 mt-4">
                                        <label for="site_web" class="block text-sm font-medium leading-6 text-gray-900">Site web</label>
                                        <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
                                            <input type="text" name="site_web" id="site_web" autocomplete="site_web"
                                            value=""
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Entrez l'adresse de votre site web">
                                        </div>
                                        </div>
                                    </div>


                                    <div class="col-span-full">
                                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adresse email</label>
                                        <div class="mt-2">
                                        <input type="text" name="email" id="email" autocomplete="email"
                                        placeholder="Votre adresse email"
                                        value=""
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2 sm:col-start-1">
                                        <label for="facebook" class="block text-sm font-medium leading-6 text-gray-900">Lien facebook</label>
                                        <div class="mt-2">
                                        <input type="text" name="facebook" id="facebook"
                                        placeholder="Entrez le lien de votre page Facebook"
                                        autocomplete="address-level2"
                                        value=""
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="instagram" class="block text-sm font-medium leading-6 text-gray-900">Lien Instagram</label>
                                        <div class="mt-2">
                                        <input type="text" name="instagram" id="instagram"
                                        placeholder="Entrez le lien de votre page Instagram"
                                        autocomplete="address-level1"
                                        value=""
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-2">
                                        <label for="whatsapp" class="block text-sm font-medium leading-6 text-gray-900">Numéro Whatsapp</label>
                                        <div class="mt-2">
                                        <input type="text" name="whatsapp" id="whatsapp"
                                        placeholder="Entre votre numéro Whatsapp"
                                        autocomplete="whatsapp"
                                        value=""
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-3">
                                        <label for="fixe1" class="block text-sm font-medium leading-6 text-gray-900">Numéro fix 1</label>
                                        <div class="mt-2">
                                        <input type="text" name="fixe1" id="fixe1"
                                        autocomplete="fixe1"
                                        value=""
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="fixe2" class="block text-sm font-medium leading-6 text-gray-900">Numéro fix 2</label>
                                        <div class="mt-2">
                                        <input type="text" name="fixe2" id="fixe2"
                                        value=""
                                        autocomplete="fixe2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="mobile1" class="block text-sm font-medium leading-6 text-gray-900">Numéro mobile 1</label>
                                        <div class="mt-2">
                                        <input type="text" name="mobile1"
                                        id="mobile1" autocomplete="mobile1"
                                        value=""
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="mobile2" class="block text-sm font-medium leading-6 text-gray-900">Numéro mobile 2</label>
                                        <div class="mt-2">
                                        <input type="text" name="mobile2"
                                        value=""
                                        id="mobile2" autocomplete="mobile2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-3">
                                        <label for="map_link" class="block text-sm font-medium leading-6 text-gray-900">Entrer le lien google map de votre lcoalisation</label>
                                        <div class="mt-2">
                                        <input type="text" name="map_link" id="map_link"
                                        value=""
                                        autocomplete="map_link"
                                        placeholder="Dans partager votre localisation copié le lien"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="html_map" class="block text-sm font-medium leading-6 text-gray-900">Entrer le HTML de google map de votre lcoalisation</label>
                                        <div class="mt-2">
                                        <input type="text" name="html_map" id="html_map"
                                        value=""
                                        placeholder="Dans partager votre localisation copié dans 'integré une carte'"
                                        autocomplete="html_map"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>


                                    <div class="sm:col-span-full">
                                        <label for="images" class="block text-sm font-medium leading-6 text-gray-900">Quelques images de présentation</label>
                                        <div class="mt-2">
                                        <input type="file" accept="image/*" multiple="true" name="images[]" id="images"
                                        placeholder="Selectionnez quelques images de votre société"
                                        autocomplete="images"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Services</h2>
                            {{-- <p class="mt-1 text-sm leading-6 text-gray-600">Si vosu proposez d'autres services</p> --}}

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <div class="max-w-sm bg-gray-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="servicePicture1"
                                        name="servicePicture1"
                                        type="file"
                                        accept="image/*">
                                        <img id="preview1" class="rounded-t-lg mx-auto mt-2" src="" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                                        <div class="p-2">
                                            <input
                                            type="text"
                                            name="servicename1"
                                            id="servicename1"
                                            value=""
                                            autocomplete="postal-code"
                                            placeholder="titre du service"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            {{-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5> --}}
                                            <textarea name="description1" id="description1" class="px-2 mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            rows="2"
                                            placeholder="Descritpion du service"></textarea>
                                            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-sm bg-gray-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="servicePicture2"
                                        name="servicePicture2"
                                        type="file" accept="image/*">
                                        <img id="preview2" class="rounded-t-lg mx-auto mt-2" src="" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                                        <div class="p-2">
                                            <input
                                            type="text"
                                            name="servicename2"
                                            id="servicename2"
                                            autocomplete="postal-code"
                                            placeholder="titre du service"
                                            value=""
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            {{-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5> --}}
                                            <textarea name="description2" id="description2" class="px-2 mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            rows="2"
                                            placeholder="Descritpion du service"></textarea>
                                            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-sm bg-gray-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="servicePicture3"
                                        name="servicePicture3"
                                        type="file" accept="image/*">
                                        <img id="preview3" class="rounded-t-lg mx-auto mt-2" src="" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                                        <div class="p-2">
                                            <input
                                            type="text"
                                            name="servicename3"
                                            id="servicename3"
                                            value=""
                                            autocomplete="postal-code"
                                            placeholder="titre du service"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            {{-- <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5> --}}
                                            <textarea name="description3" id="description3" class="px-2 mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            rows="2"
                                            placeholder="Descritpion du service"></textarea>
                                            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Calendier</h2>
                            {{-- <p class="mt-1 text-sm leading-6 text-gray-600">quelles sont vos horaires</p> --}}

                            <div class="relative overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th class="mx-4 text-black px-2 py-1">
                                                Jours
                                            </th>
                                            <th class="text-center text-black px-2 py-1">
                                                Heure de début et de fin
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Lundi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="lundi_heure_debut" value="" name="lundi_heure_debut" required><br>
                                                <input type="time" id="lundi_heure_fin" value="" name="lundi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="lundi_ferme" name="lundi_ferme">
                                                <label for="lundi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Mardi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="mardi_heure_debut" value="" name="mardi_heure_debut" required><br>
                                                <input type="time" id="mardi_heure_fin" value="" name="mardi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="mardi_ferme" name="mardi_ferme">
                                                <label for="mardi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Mercredi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="mercredi_heure_debut" value="" name="mercredi_heure_debut" required><br>
                                                <input type="time" id="mercredi_heure_fin" value="" name="mercredi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="mercredi_ferme" name="mercredi_ferme">
                                                <label for="mercredi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Jeudi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="jeudi_heure_debut" value="" name="jeudi_heure_debut" required><br>
                                                <input type="time" id="jeudi_heure_fin" value="" name="jeudi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="jeudi_ferme" name="jeudi_ferme">
                                                <label for="jeudi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Vendredi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="vendredi_heure_debut" value="" name="vendredi_heure_debut" required><br>
                                                <input type="time" id="vendredi_heure_fin" value="" name="vendredi_heure_fin" required><br>
                                                <input type="checkbox" value="1" id="vendredi_ferme" name="vendredi_ferme">
                                                <label for="vendredi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Samedi</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="samedi_heure_debut" value="" name="samedi_heure_debut"><br>
                                                <input type="time" id="samedi_heure_fin" value="" name="samedi_heure_fin"><br>
                                                <input type="checkbox" value="1" id="samedi_ferme" name="samedi_ferme">
                                                <label for="samedi_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Dimanche</th>
                                            <td class="text-center px-2 py-1">
                                                <input type="time" id="dimanche_heure_debut" value="" name="dimanche_heure_debut"><br>
                                                <input type="time" id="dimanche_heure_fin" value="" name="dimanche_heure_fin"><br>
                                                <input type="checkbox" value="1" id="dimanche_ferme" name="dimanche_ferme">
                                                <label for="dimanche_ferme">Fermé ?</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <div class="mt-6 flex items-center justify-end gap-x-6">
                        {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Annuler</button> --}}
                        <button type="submit" class="w-full rounded-md bg-orange-600 px-5 py-3 text-xl font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Ajouter</button>
                        </div>
                    </form>

                    <script>

                        // JavaScript pour gérer la sélection et l'affichage des images
                        $(document).ready(function() {
                            // Écouteurs d'événements pour les champs de fichier
                            $('#servicePicture1').change(function() {
                                previewImage(this, '#preview1');
                            });
                            $('#servicePicture2').change(function() {
                                previewImage(this, '#preview2');
                            });
                            $('#servicePicture3').change(function() {
                                previewImage(this, '#preview3');
                            });


                            $('#image_profil').change(function() {
                                previewImage(this, '#profilePreview');
                            });
                            $('#image_couverture').change(function() {
                                previewBackImage(this, '#backgroundPreviewc');
                                // $('#toHide').style.display = 'none';
                            });

                            // Fonction pour prévisualiser l'image sélectionnée
                            function previewImage(input, previewId) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        $(previewId).attr('src', e.target.result).show();
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                            function previewBackImage(input, previewId) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        $(previewId).css('background-image', `url(${e.target.result})`);
                                    }

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }

                        });
                    </script>

                </div>
            </div>
        </div>



    @endisset

@endsection
