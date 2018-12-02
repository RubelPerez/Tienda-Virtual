<?php

namespace App\Http\Controllers;
use App\index;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public  function page()
   {
   	$indice = index::all();
   	return view('mision')->with(compact('indice')) ;

   }
}
