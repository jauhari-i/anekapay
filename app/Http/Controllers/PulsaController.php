<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PulsaController extends Controller
{
    //
    public function Pulsa(){
        $data="Coba pulsa";
        return response()->json($data, 200);
    }
    
    public function PulsaAuth(){
        $data = "Welcome ". Auth::user()->name;
        return response()->json($data,200);
    }
}
