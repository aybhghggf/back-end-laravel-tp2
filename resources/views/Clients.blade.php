@extends('layouts.base')
@section('title') ALL @endsection
@section('Clients')
@if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container mt-4">
    <h2 class="mb-4">Liste des Clients</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Créé le</th>
                <th>Mis à jour le</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->Nom }}</td>
                    <td>{{ $client->Prenom }}</td>
                    <td>{{ $client->Email }}</td>
                    <td>{{ $client->created_at }}</td>
                    <td>{{ $client->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

   {{ $clients->links() }}
@endsection
