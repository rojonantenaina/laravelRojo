<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout nouvel etat de congé') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
<div class=" flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-1">
    
    <form class="mt-8 space-y-9" action="{{route('etatConge.store')}}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <!-- Libelle -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="etatConge">
                Etat à entrer
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="etatConge" id="etatConge" type="text" placeholder="Nombre de jours"
            >
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Enregistrer
        </button><br>
        <a href="{{route('etatConge.index')}}" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Annuler
        </a>
      </div>
    </form>
  </div>
</div>

    </div>
</x-app-layout>