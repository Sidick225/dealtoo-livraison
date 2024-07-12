@extends('dashboard.model')

@section('content')

        <h3 class="text-3xl font-medium text-gray-700">Demander une certification pour "{{$livreur->nom_societe}}"</h3>


        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">



                    <form class="mt-5 mx-auto" action="{{route('toggleCertification', $livreur->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-5">
                                <label for="dfe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Déclaration Fiscale d'Existance (PDF)</label>
                                <input type="file" accept="application/pdf" name="dfe" id="dfe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
                            </div>
                            <div class="mb-5">
                                <label for="rccm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre régistre de commerce (PDF)</label>
                                <input type="file" accept="application/pdf" id="rccm" name="rccm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                        </div>
                        <button type="submit" class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Demander
                        </button>
                      </form>


                </div>
            </div>
        </div>

@endsection
