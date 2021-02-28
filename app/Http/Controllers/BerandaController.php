<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BerandaController extends Controller
{
    
    public function index(Request $request)
    {
       $positif = DB::table('trackings')->sum('tracking.positif');
       $sembuh = DB::table('trackings')->sum('tracking.sembuh');
       $meninggal = DB::table('trackings')->sum('tracking.meninggal');
       return view("layouts.beranda.index", compact('positif','sembuh', 'meninggal'));
    }

}
