@extends('layouts.base')
@section('title') ALL @endsection
@section('Clients')
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 right-0 px-4 py-3" data-bs-dismiss="alert" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
@endif
<div class="container mx-auto px-4 mt-16">
    <h2 class="text-2xl font-bold mb-6">Liste des Clients</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prénom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Créé le</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mis à jour le</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($clients as $client)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->Nom }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->Prenom }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->Email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->created_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $client->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $clients->links() }}
    </div>
</div>
@endsection
