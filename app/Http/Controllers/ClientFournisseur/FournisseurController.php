<?php

namespace App\Http\Controllers\ClientFournisseur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
     //Retourner la page
  public function index()
  {
    return view('ClientFournisseur/Fournisseur');
  }
}
