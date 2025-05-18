<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
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
        $data = $req->validated();
        $Nom = $data['nom'];
        $Prenom = $data['prenom'];
        $Email = $data['email'];
        $password = $data['password'];

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
    public function showLogin(){
        return view('Login');
    }
public function LoginUser(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return to_route('clients.clients')->with('success', 'Bienvenue');
    } else {
        return back()->with('error', 'Erreur de connexion');
    }
}


}
