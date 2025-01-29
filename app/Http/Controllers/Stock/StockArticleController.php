<?php

namespace App\Http\Controllers\Stock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockArticleController extends Controller
{
  //Retourner la page
  function index (){
    return view('Stock.StockArticle');
  }
}
