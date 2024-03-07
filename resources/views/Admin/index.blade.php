
@extends('layouts/mylayouts')

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
                    <!-- <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                        <p>Sort By:</p>
                        <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                            <option class="text-sm text-indigo-800">Latest</option>
                            <option class="text-sm text-indigo-800">Oldest</option>
                            <option class="text-sm text-indigo-800">Latest</option>
                        </select>
                    </div> -->
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                <div class="sm:flex items-center justify-between">
                    <div class="flex items-center">
                        <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href="#">
                            <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                <p>Recemment</p>
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="url('')">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                <p>Accepte</p>
                            </div>
                        </a>
                        <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="#">
                            <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
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
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2">Bouikourdassen Oussama</p>
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
                                    <button class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">today at 18:00</button>
                                </td>
                                <td class="pl-4">
                                    <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr class="h-3"></tr>

                        </tbody>
                    </table>
    <div class="flex items-center justify-between p-4 border-t border-blue-gray-50">
    <button
      class="select-none rounded-lg border border-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      type="button">
      Previous
    </button>
    <div class="flex items-center gap-2">
      <button
        class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg border border-gray-900 text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button">
        <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          1
        </span>
      </button>
      <button
        class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button">
        <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          2
        </span>
      </button>
      <button
        class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button">
        <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          3
        </span>
      </button>
      <button
        class="relative h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button">
        <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
          ...
        </span>
      </button>
    </div>
    <button
      class="select-none rounded-lg border border-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      type="button">
      Next
    </button>
  </div>
                </div>
            </div>
        </div>
        <style>.checkbox:checked + .check-icon {
  display: flex;
}
</style>
        <script>function dropdownFunction(element) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
                list.classList.add("target");
                for (i = 0; i < dropdowns.length; i++) {
                    if (!dropdowns[i].classList.contains("target")) {
                        dropdowns[i].classList.add("hidden");
                    }
                }
                list.classList.toggle("hidden");
            }</script>
                    </div>
                </div>
            </main>

            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="" class="underline">Ofppt</a>.
            </footer>
        </div>
@endsection




