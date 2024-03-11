
@extends('layouts/Prolayouts')

@section('title', 'Page d\'accueil')

@section('content')





        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                    <div class="w-full mt-1">

                    <div class="bg-white overflow-auto">
                       <!-- component -->
<div class="sm:px-6 w-full">
<!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Reclamation</p>

                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                <div class="sm:flex items-center justify-between">
                    <div class="flex items-center">
                        <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="{{url('/Professeur')}}">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full">
                                <p>Recemment</p>
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="{{url('Prof/Acc')}}">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                <p>Accepte</p>
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8 " href="{{url('Prof/Reje')}}">
                            <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full ">
                                <p>Rejeter</p>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="mt-7 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <tbody>
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <td>
                                    <div class="ml-5">
                                        <!-- <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                            <input placeholder="checkbox" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                                            <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                                <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M5 12l5 5l10 -10"></path>
                                                </svg>
                                            </div>
                                        </div> -->
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2">Etud Oussama</p>
                                    </div>
                                </td>
                                <td class="pl-24">

                                </td>
                                <td class="pl-5">

                                </td>
                                <td class="pl-5">

                                </td>
                                <td class="pl-5">

                                </td>
                                <td class="pl-5">
                                    <button class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">envoiyer le 06/03 </button>
                                </td>
                                <td class="pl-4">
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button>
                                </td>

                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

                    </div>
                </div>
            </main>

            <footer class="w-full bg-white text-right p-4">
                Designed by  <a target="_blank" href="" class="underline">Ofppt</a>.
            </footer>
        </div>
@endsection




