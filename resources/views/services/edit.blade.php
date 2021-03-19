<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification service') }}
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
    
    <form class="mt-8 space-y-9" action="{{route('services.update',$service->id)}}" method="POST">
      @csrf
      @method('PUT')
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <!-- Libelle -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="libelle">
                Libellé
            </label>
            <input value="{{ $service->libelle }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="libelle" id="libelle" type="text" placeholder="Libellé"
            >
        </div>
        <!-- Libelle -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="role">
                Role
            </label>
            <input value="{{ $service->role }}" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" name="role" id="role" type="text"  placeholder="role"
            >
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Modifier
        </button><br>
        <a href="{{route('services.index')}}" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Annuler
        </a>
      </div>
    </form>
  </div>
</div>

    </div>
</x-app-layout>