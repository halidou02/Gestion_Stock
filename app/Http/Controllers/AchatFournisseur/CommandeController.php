<?php

namespace App\Http\Controllers\AchatFournisseur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //Retourner la page
    function index(){
      return view('AchatFournisseur.Commande');
    }
}
