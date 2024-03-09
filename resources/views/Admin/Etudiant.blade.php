@extends('layouts/mylayouts')

@section('title', 'Page d\'accueil')

@section('content')


<div class="mx-auto w-full px-4 py-8 sm:px-8">
  <div class="flex items-center justify-between pb-6">
    <div>
      <h2 class="font-semibold text-gray-700">User Accounts</h2>
      <span class="text-xs text-gray-500">View accounts of registered users</span>
    </div>
    <form action="/Admin/Etudiant" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center justify-between">
        <div class="ml-10 space-x-8 lg:ml-40">
            <input
                class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] flex items-center gap-3"
                type="file" name="file" value="Upload Files"/>
                <button class="btn btn-primary" type="submit">importe</button>
        </div>
        </div>
    </form>
  </div>
  <div class="overflow-y-hidden rounded-lg border">
    <div class="overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="bg-red-800 text-left text-xs font-semibold uppercase tracking-widest text-white">
            <th class="px-5 py-3">N-Apposer</th>
            <th class="px-5 py-3">Nom / Prenom</th>
            <th class="px-5 py-3">Filier</th>
            <th class="px-5 py-3">Nivaeu</th>
            <th class="px-5 py-3">Groop</th>
            <th class="px-5 py-3">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-500">
          <tr>
            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
              <p class="whitespace-no-wrap">3</p>
            </td>
            <td class="border-b border-gray-200 bg-white px-2 py-5 text-sm">
              <div class="flex items-center">
                <div class="ml-3">
                  <p class="whitespace-no-wrap">Bouikourdassen OUSSAMA</p>
                </div>
              </div>
            </td>
            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
              <p class="whitespace-no-wrap">Developpement web full stack</p>
            </td>
            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
              <p class="whitespace-no-wrap">S4</p>
            </td>

            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
              <p class="whitespace-no-wrap">DD202</p>
            </td>

            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
              <span class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Active</span>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
    <div class="flex flex-col items-center border-t bg-white px-5 py-5 sm:flex-row sm:justify-between">
      <span class="text-xs text-gray-600 sm:text-sm"> Showing 1 to 5 of 12 Entries </span>
      <div class="mt-2 inline-flex sm:mt-0">
        <button class="mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Prev</button>
        <button class="h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Next</button>
      </div>
    </div>
  </div>
</div>



@endsection
