<?php

namespace App\Http\Controllers\VenteClient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DevisController extends Controller
{
     //Retourner la page
     function index(){
      return view('VenteClient.Devis');
    }
}
