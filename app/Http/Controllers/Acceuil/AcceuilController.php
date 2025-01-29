<?php

namespace App\Http\Controllers\Acceuil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
  public function index()
  {
    return view('Acceuil/Acceuil');
  }
}
