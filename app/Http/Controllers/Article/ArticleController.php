<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
  //Retourner la page
  public function index()
  {
    return view('Article/Article');
  }
}
