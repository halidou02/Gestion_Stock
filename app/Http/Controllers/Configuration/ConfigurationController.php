<?php

namespace App\Http\Controllers\Configuration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    //Retourner la page
    function index(){
      return view ('Configuration.Configuration');
    }
}
