<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class MainDash extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function initial()
    {
        $aspD= \DB::table('demographic_aspects')->select('age', 'gender','size','weight')->get();

        $g2= \DB::table('minimental_test')
        ->join('demographic_aspects', 'minimental_test.form_id', '=', 'demographic_aspects.form_id')
        ->select('minimental_test.final_score','demographic_aspects.gender')
        ->get();
        
        $alF= \DB::table('functional_scope_e_sppb')->select('mayor_distance')->get();

        $buE= \DB::table('built_environment')
        ->join('questions', 'built_environment.question_id', '=', 'questions.id')
        ->select('questions.name','questions.id','built_environment.answer')
        ->get();

        return view('initial', compact('aspD','g2','alF','buE'));
    }
}
