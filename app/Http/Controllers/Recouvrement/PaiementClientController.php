<?php

namespace App\Http\Controllers\Recouvrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaiementClientController extends Controller
{
    //Retourner la page
  function index(){
    return view('Recouvrement.PaiementClient');
  }
}
