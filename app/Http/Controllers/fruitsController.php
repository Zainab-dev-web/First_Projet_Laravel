<?php

namespace App\Http\Controllers;

use App\fruit;
use Illuminate\Http\Request;

class fruitsController extends Controller
{
    public function index(){
        
        $listFruits=fruit::all();
        return view ('fruits' , compact('listFruits'));
      
    }
}
