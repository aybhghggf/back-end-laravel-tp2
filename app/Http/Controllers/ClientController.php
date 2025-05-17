<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function ClientPage()
    {
        return view('Clients');
    }

    public function ClientAdd()
    {
        return view('AddClients');
    }

public function store(ClientRequest $req)
{
    $req->validated();
    

    $Nom = $req->nom;
    $Prenom = $req->prenom;
    $Email = $req->email;
    $password = $req->password;

    if (
        Client::create([
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'Email' => $Email,
            'Password' => Hash::make($password),
        ])
    ) {
        return to_route('clients.clients')->with('success', 'Client ajouté avec succès');
    } else {
        return to_route('clients.clients')->with('error', 'Erreur lors de l\'ajout du client');
    }
}


    public function showAllClients()
    {
        $clients = Client::paginate(10);
        return view('Clients', [
            'clients' => $clients
        ]);
    }
}
