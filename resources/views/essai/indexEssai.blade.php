<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Etats de congé au commune urbaine de Fianarantsoa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <!-- This example requires Tailwind CSS v2.0+ -->
           <div class="block mb-8">
                <a href="{{route('essai.create')}}" type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Nouveau Essai
                </a>
           </div>
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Immatricule
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nom
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Prenom
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Supprimer</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($essais as $essai)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $essai->id}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $essai->nomEssai}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $essai->prenomEssai}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a  class="text-indigo-600 hover:text-indigo-900" href="{{ route('essai.edit',$essai->id) }}">Edit</a>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <form action="{{ route('essai.destroy',$essai->id) }}" method="POST">
                     @csrf
                     @method('DELETE')
                  <button type="submit" class="text-red-600 hover:text-indigo-900">Supprimer</button>
              </form>
              </td>
            </tr>

            <!-- More items... -->
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>
</x-app-layout>
