<?php

namespace App\Http\Controllers\Caisse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaisseController extends Controller
{
  //Retourner la page
  public function index()
  {
    return view('Caisse.Caisse');
  }
}
