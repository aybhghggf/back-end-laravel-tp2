<?php

namespace App\Http\Controllers;

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

    public function store(Request $req)
    {
        $Nom = $req->nom;
        $Prenom = $req->prenom;
        $Email = $req->email;
        $password = $req->password;

        Client::create([
            'Nom' => $Nom,
            'Prenom' => $Prenom,
            'Email' => $Email,
            'Password' => Hash::make($password),
        ]);

        return redirect()->back()->with('success', 'Client ajouté avec succès !');
    }

    public function showAllClients()
    {
        $clients = Client::paginate(10);
        return view('Clients', [
            'clients' => $clients
        ]);
    }
}
