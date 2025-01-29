<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegularisationController extends Controller
{
  //Retourner la page
  function index (){
    return view('Stock.Regularisation');
  }
}
