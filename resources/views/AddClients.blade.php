@extends('layouts.base')
@section('title') Add @endsection
@section('Addclient')
  @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
      <ul class="list-disc list-inside">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('store.store') }}" method="POST" class="max-w-md mx-auto mt-8">
    @csrf
    @method('PUT')
    <div class="mb-6">
      <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
      <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" name="nom" required>
      @error('nom')
        <div class="text-red-500 text-sm mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-6">
      <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prénom</label>
      <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prenom" name="prenom" required>
      @error('prenom')
        <div class="text-red-500 text-sm mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-6">
      <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
      <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" required>
      @error('email')
        <div class="text-red-500 text-sm mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
      <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" required>
      @error('password')
        <div class="text-red-500 text-sm mt-1">
          {{ $message }}
        </div>
      @enderror
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
      Enregistrer
    </button>
  </form>
@endsection