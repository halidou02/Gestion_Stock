<?php

namespace App\Http\Controllers\VenteClient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandeClientController extends Controller
{
    //Retourner la page
    function index(){
      return view('VenteClient.Commande');
    }
}
