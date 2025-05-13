<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function ClientPage(){
        return view('Clients');
    }
     public function ClientAdd(){
        return view('AddClients');
    }
}
