<?php

namespace App\Http\Controllers\Caisse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistreCaisseController extends Controller
{
    //Retourner la page
    function index (){
      return view('Caisse.RegistreCaisse');
    }
}
