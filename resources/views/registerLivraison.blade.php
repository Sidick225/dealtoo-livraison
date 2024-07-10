@extends('dashboard.model')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@section('content')

    <form method="POST" action="{{route('livreurs.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                {{-- <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p> --}}

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nom de société</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <input type="text" name="name" id="name" autocomplete="name" class="px-2 block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            placeholder="Nom de votre société de livraison">
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

                    <div class="col-span-full">
                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo de profil</label>
                        <div class="mt-2 flex items-center gap-x-3">
                        <img id="profilePreview" src="https://www.digitaltrends.com/wp-content/uploads/2013/02/url4.png" alt="" style="width: 150px; height:150px; object-fit:cover; object-position:center; border-radius:50%">
                        {{-- <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Ajouter</button> --}}
                        <input type="file" name="image_profil" id="image_profil" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Image de couverture</label>
                        <div id="backgroundPreviewc" class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-20" style="background-size: cover; background-position:center">
                            <br>
                            <div id="toHide" class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                <label for="image_couverture" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Image de couverture</span>
                                    <input id="image_couverture" name="image_couverture" type="file" class="sr-only">
                                </label>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                {{-- <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p> --}}

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="location" class="block text-sm font-medium leading-6 text-gray-900">localisation</label>
                        <div class="mt-2">
                        <input id="location" name="location" type="location" autocomplete="location" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Où êtes vous situé ?">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="site_web" class="block text-sm font-medium leading-6 text-gray-900">Site web</label>
                        <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 bg-white ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                            <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">https://</span>
                            <input type="text" name="site_web" id="site_web" autocomplete="site_web"
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
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="facebook" class="block text-sm font-medium leading-6 text-gray-900">Lien facebook</label>
                        <div class="mt-2">
                        <input type="text" name="facebook" id="facebook"
                        placeholder="Entrez le lien de votre page Facebook"
                        autocomplete="address-level2"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="instagram" class="block text-sm font-medium leading-6 text-gray-900">Lien Instagram</label>
                        <div class="mt-2">
                        <input type="text" name="instagram" id="instagram"
                        placeholder="Entrez le lien de votre page Instagram"
                        autocomplete="address-level1"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="whatsapp" class="block text-sm font-medium leading-6 text-gray-900">Numéro Whatsapp</label>
                        <div class="mt-2">
                        <input type="text" name="whatsapp" id="whatsapp"
                        placeholder="Entre votre numéro Whatsapp"
                        autocomplete="whatsapp"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>


                    <div class="sm:col-span-3">
                        <label for="fixe1" class="block text-sm font-medium leading-6 text-gray-900">Numéro fix 1</label>
                        <div class="mt-2">
                        <input type="text" name="fixe1" id="fixe1"
                        autocomplete="fixe1"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="fixe2" class="block text-sm font-medium leading-6 text-gray-900">Numéro fix 2</label>
                        <div class="mt-2">
                        <input type="text" name="fixe2" id="fixe2" autocomplete="fixe2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="mobile1" class="block text-sm font-medium leading-6 text-gray-900">Numéro mobile 1</label>
                        <div class="mt-2">
                        <input type="text" name="mobile1" id="mobile1" autocomplete="mobile1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="mobile2" class="block text-sm font-medium leading-6 text-gray-900">Numéro mobile 2</label>
                        <div class="mt-2">
                        <input type="text" name="mobile2" id="mobile2" autocomplete="mobile2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>


                    <div class="sm:col-span-3">
                        <label for="map_link" class="block text-sm font-medium leading-6 text-gray-900">Entrer le lien google map de votre lcoalisation</label>
                        <div class="mt-2">
                        <input type="text" name="map_link" id="map_link" autocomplete="map_link"
                        placeholder="Dans partager votre localisation copié le lien"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="html_map" class="block text-sm font-medium leading-6 text-gray-900">Entrer le HTML de google map de votre lcoalisation</label>
                        <div class="mt-2">
                        <input type="text" name="html_map" id="html_map"
                        placeholder="Dans partager votre localisation copié dans 'integré une carte'"
                        autocomplete="html_map"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>


                    <div class="sm:col-span-full">
                        <label for="images" class="block text-sm font-medium leading-6 text-gray-900">Quelques images de présentation</label>
                        <div class="mt-2">
                        <input type="file" multiple="true" name="images" id="images"
                        placeholder="Selectionnez quelques images de votre société "
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
                        type="file">
                        <img id="preview1" class="rounded-t-lg mx-auto mt-2" src="/docs/images/blog/image-1.jpg" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                        <div class="p-2">
                            <input
                            type="text"
                            name="servicename1"
                            id="servicename1"
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
                        type="file">
                        <img id="preview2" class="rounded-t-lg mx-auto mt-2" src="/docs/images/blog/image-1.jpg" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                        <div class="p-2">
                            <input
                            type="text"
                            name="servicename2"
                            id="servicename2"
                            autocomplete="postal-code"
                            placeholder="titre du service"
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
                        type="file">
                        <img id="preview3" class="rounded-t-lg mx-auto mt-2" src="/docs/images/blog/image-1.jpg" alt="" style="width:150px; height:130px; object-fit:cover; object-position:center; border:1px solid orange;"/>
                        <div class="p-2">
                            <input
                            type="text"
                            name="servicename3"
                            id="servicename3"
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
                            <th class="text-center text-black px-2 py-1">
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
                                <input type="time" id="lundi_heure_debut" name="lundi_heure_debut" required>
                                <input type="time" id="lundi_heure_fin" name="lundi_heure_fin" required>
                                <input type="checkbox" id="lundi_ferme" name="lundi_ferme">
                                <label for="lundi_ferme">Fermé ?</label>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Mardi</th>
                            <td class="text-center px-2 py-1">
                                <input type="time" id="mardi_heure_debut" name="mardi_heure_debut" required>
                                <input type="time" id="mardi_heure_fin" name="mardi_heure_fin" required>
                                <input type="checkbox" id="mardi_ferme" name="mardi_ferme">
                                <label for="mardi_ferme">Fermé ?</label>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Mercredi</th>
                            <td class="text-center px-2 py-1">
                                <input type="time" id="mercredi_heure_debut" name="mercredi_heure_debut" required>
                                <input type="time" id="mercredi_heure_fin" name="mercredi_heure_fin" required>
                                <input type="checkbox" id="mercredi_ferme" name="mercredi_ferme">
                                <label for="mercredi_ferme">Fermé ?</label>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Jeudi</th>
                            <td class="text-center px-2 py-1">
                                <input type="time" id="jeudi_heure_debut" name="jeudi_heure_debut" required>
                                <input type="time" id="jeudi_heure_fin" name="jeudi_heure_fin" required>
                                <input type="checkbox" id="jeudi_ferme" name="jeudi_ferme">
                                <label for="jeudi_ferme">Fermé ?</label>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Vendredi</th>
                            <td class="text-center px-2 py-1">
                                <input type="time" id="vendredi_heure_debut" name="vendredi_heure_debut" required>
                                <input type="time" id="vendredi_heure_fin" name="vendredi_heure_fin" required>
                                <input type="checkbox" id="vendredi_ferme" name="vendredi_ferme">
                                <label for="vendredi_ferme">Fermé ?</label>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Samedi</th>
                            <td class="text-center px-2 py-1">
                                <input type="time" id="samedi_heure_debut" name="samedi_heure_debut">
                                <input type="time" id="samedi_heure_fin" name="samedi_heure_fin">
                                <input type="checkbox" id="samedi_ferme" name="samedi_ferme">
                                <label for="samedi_ferme">Fermé ?</label>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Dimanche</th>
                            <td class="text-center px-2 py-1">
                                <input type="time" id="dimanche_heure_debut" name="dimanche_heure_debut">
                                <input type="time" id="dimanche_heure_fin" name="dimanche_heure_fin">
                                <input type="checkbox" id="dimanche_ferme" name="dimanche_ferme">
                                <label for="dimanche_ferme">Fermé ?</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Annuler</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enregistrer</button>
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
@endsection
