<?php

namespace App\Http\Controllers;

use App\legume;
use Illuminate\Http\Request;

class legumesController extends Controller
{
    public function index(){
        $listLegumes=legume::all();
        return view ('legumes' , compact('listLegumes'));
      
    }
}
