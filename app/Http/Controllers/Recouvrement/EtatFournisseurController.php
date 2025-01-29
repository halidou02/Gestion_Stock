<?php

namespace App\Http\Controllers\Recouvrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtatFournisseurController extends Controller
{
    //Retourner la page
  function index(){
    return view('Recouvrement.EtatFournisseur');
  }
}
