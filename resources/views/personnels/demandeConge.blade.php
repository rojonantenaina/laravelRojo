<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification profil personnel') }}
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
{{-- action="{{route('personnel.update',$personnel->id)}}"  --}}
<div class=" flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-1">
    
    <form class="mt-8 space-y-9" method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <!-- Libelle -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Demande de congé pour le personnel:  {{ $personnel->nomPersonnel }} {{ $personnel->prenomPersonnel }}
            </label>

            
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Date de naissance
            </label>
            <input value="{{ $personnel->dateNais }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="dateNais" id="dateNais" type="text" placeholder="Date de naissance"
            >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Lieu de naissance
            </label>
            <input value="{{ $personnel->lieuNais }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="lieuNais" id="lieuNais" type="text" placeholder="Lieu de naissance"
            >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Service
            </label>           
            <select name="service" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                {{-- @foreach($service as $service)
                <option value="{{ $service->libelle }}">
                     {{ $service->libelle }}
                     @endforeach 
                </option>                             --}}
            </select>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Sexe
            </label>
            <select name="sexe" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                <option value="Masculin">Masculin</option>
                <option value="Feminin">Feminin</option>
                
            </select>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
               Carte d'indentité Nationale 
            </label>
            <input value="{{ $personnel->CIN }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="CIN" id="CIN" type="text" placeholder="Etat congé à modifier"
            >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Situation
            </label>
            <select name="situation" class="form-select w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors cursor-pointer">
                <option value="Celibataire">Celibataire</option>
                <option value="En couple">En couple</option>
                <option value="Marié(e)">Marié(e)</option>
                <option value="Fiencé(e)">Fiancé(e)</option>
                <option value="Veuf">Veuf</option>
                <option value="Veuve">Veuve</option>
                <option value="Divorcé(e)">Divorcé(e)</option>
            </select>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Addresse
            </label>
            <input value="{{ $personnel->adresse }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="adresse" id="adresse" type="text" placeholder="Etat congé à modifier"
            >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
               Mail 
            </label>
            <input value="{{ $personnel->mail }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="mail" id="mail" type="text" placeholder="Etat congé à modifier"
            >
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Telephone
            </label>
            <input value="{{ $personnel->telephone }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="telephone" id="telephone" type="text" placeholder="Etat congé à modifier"
            >
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Modifier
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