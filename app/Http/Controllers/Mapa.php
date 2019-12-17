<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class Mapa extends Controller
{

    public function __construct()
    {
        // $this->middleware('guest');
    }
    
    public function initial()
    {
        $mapa=true;
        $ind=false;

        $muni= \DB::table('municipio')
        ->join('patient', 'municipio.name_mpio', '=', 'patient.city')
        ->select('municipio.lat','municipio.long','patient.subregion', 'municipio.name_mpio')
        ->get();

        // $g2= \DB::table('minimental_test')
        // ->join('demographic_aspects', 'minimental_test.form_id', '=', 'demographic_aspects.form_id')
        // ->select('minimental_test.final_score','demographic_aspects.gender')
        // ->get();

        // $aspD= \DB::table('demographic_aspects')->select('age', 'gender')->get();

        return view('home', compact('mapa','muni','ind'));

    }


}
