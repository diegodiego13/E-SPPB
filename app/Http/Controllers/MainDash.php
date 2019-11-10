<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class MainDash extends Controller
{
    
    public function initial()
    {
        $aspD= \DB::table('demographic_aspects')->select('age', 'gender')->get();

        $g2= \DB::table('minimental_test')
        ->join('demographic_aspects', 'minimental_test.form_id', '=', 'demographic_aspects.form_id')
        ->select('minimental_test.final_score','demographic_aspects.gender')
        ->get();
        
        return view('initial', compact('aspD','g2'));
    }
}
