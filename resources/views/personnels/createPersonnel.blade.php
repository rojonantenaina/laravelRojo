<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout nouveau personnel') }}
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
    
    <form class="mt-8 space-y-9" action="{{route('personnel.store')}}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <!-- Libelle -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="nomPersonnel">
                Nom du personnel
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="nomPersonnel" id="nomPersonnel" type="text" placeholder="Nom du personnel" required>
        </div>
        <!-- Libelle -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Prenom du personnel
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="prenomPersonnel" id="prenomPersonnel" type="text"  placeholder="Prenom du personnel">
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Date de naissance
            </label>
            <input type="date" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="dateNais" id="dateNais">
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Lieu de naissance
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="lieuNais" id="lieuNais" type="text"  placeholder="Lieu de naissance"
            >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Pére
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="pere" id="lieuNais" type="text"  placeholder="Lieu de naissance"
            >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
               Mére
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="mere" id="lieuNais" type="text"  placeholder="Lieu de naissance"
            >
        </div>
        {{-- <div class="px-2 w-1/2">
            LE DEMI PORTION
        </div> --}}
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Sexe
            </label>
            <select name="sexe" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                <option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
                
            </select>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Carte d'indentité National
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="CIN" id="CIN" type="text"  placeholder="Carte d'indentité National">
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Situation amoureuse
            </label>
            <select name="situation" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                <option value="celibataire">Celibataire</option>
                <option value="encouple">En couple</option>
                <option value="marie">Marié</option>
                <option value="fience">Fiancé</option>
                <option value="veuf">Veuf</option>
                <option value="veuve">Veuve</option>
                <option value="divorce">Divorcé</option>
            </select>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Nombre d'enfant
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="nbEnfant" id="nbEnfant" type="text"  placeholder="Nombre des enfants">
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Adresse
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="adresse" id="adresse" type="text"  placeholder="adresse">
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Mail address
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="mail" id="mail" type="text"  placeholder="Addresse du mail">
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Numero du tétéphone
            </label>
            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="telephone" id="telephone" type="text"  placeholder="Numero du tétéphone">
        </div>
        
      </div>
      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Enregistrer
        </button><br>
        <a href="{{route('personnel.index')}}" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Annuler
        </a>
      </div>
    </form>
  </div>
</div>

    </div>
</x-app-layout>