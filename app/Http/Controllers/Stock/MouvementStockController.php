<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MouvementStockController extends Controller
{
    //Retourner la page
    function index (){
      return view('Stock.MouvementStock');
    }
}
