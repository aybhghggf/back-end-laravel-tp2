@extends('layouts.base')
@section('title') Add @endsection
@section('Addclient')
    <div class="container mt-5">
    <h2 class="mb-4">Ajouter un Client</h2>
    <form action="{{  route('store.store')  }}" method="POST">
        @csrf
        @method('PUT')
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
      </div>

      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
  </div>
@endsection