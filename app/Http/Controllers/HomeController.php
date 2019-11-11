<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(\Auth::user()->rol === 'Investigador'){
            $users= \DB::table('solicitud')->select(
                'nombre', 
                'apellidos',
                'email',
                'fecha',
                'profesion',
                'institucion',
                'motivo'
                )->get();
            return view('home', compact('users'));
        }else{
            return view('home');
        }
        
        
    }
}
