<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class Paciente extends Controller
{

    public function __construct()
    {
        
    }
    
    public function initial()
    {
        $history=true;
        return view('home', compact('history'));
    }

    public function store(Request $request){
        $history=true;
        // $conCed=true;

        $this->validate($request,
            [
                'cedula'=> 'required'
            ]
        );
        $cedula=$request->input('cedula');

        $cedul= \DB::table('patient')
        // ->join('demographic_aspects', 'minimental_test.form_id', '=', 'demographic_aspects.form_id')
        ->select('id','name')
        ->where('id', $cedula)
        ->get();
        
        // $g2= \DB::table('minimental_test')
        // ->join('demographic_aspects', 'minimental_test.form_id', '=', 'demographic_aspects.form_id')
        // ->select('minimental_test.final_score','demographic_aspects.gender')
        // ->where('cedula', $cedula)
        // ->get();

        return view('home', compact('history','cedul'));
    }


}
