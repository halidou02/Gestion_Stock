<?php

namespace App\Http\Controllers\ClientFournisseur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  //Retourner la page
  public function index()
  {
    return view('ClientFournisseur/Client');
  }
}
