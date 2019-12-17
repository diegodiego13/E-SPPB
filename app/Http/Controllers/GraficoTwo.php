<?php

namespace E_SPPB\Http\Controllers;

use Illuminate\Http\Request;

class GraficoTwo extends Controller
{


    public function initial(Request $request){
   
        $this->validate($request,
        [
            'op_1'=> 'required',
            'region'=> 'required'
        ]
        );

        $region=$request->input('region');
        $aspecto=$request->input('op_1');
        
        if( $region=='st'){

            if($aspecto=='p1'){
                
                $consulta_1=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=1;
                return view('home', compact('consulta_1','grafico'));

            }else if($aspecto=='p2'){
                    
                $consulta_2=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=2;
                return view('home', compact('consulta_2','grafico'));

            }else if($aspecto=='p3'){
                    
                $consulta_3=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=3;
                return view('home', compact('consulta_3','grafico'));

            }else if($aspecto=='p4'){
                    
                $consulta_4=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=4;
                return view('home', compact('consulta_4','grafico'));

            }else if($aspecto=='p5'){
                    
                $consulta_5=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=5;
                return view('home', compact('consulta_5','grafico'));

            }else if($aspecto=='p6'){
                    
                $consulta_6=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=6;
                return view('home', compact('consulta_6','grafico'));

            }else if($aspecto=='p7'){
                    
                $consulta_7=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=7;
                return view('home', compact('consulta_7','grafico'));

            }else if($aspecto=='p8'){
                    
                $consulta_8=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=8;
                return view('home', compact('consulta_8','grafico'));

            }else if($aspecto=='p9'){
                    
                $consulta_9=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=9;
                return view('home', compact('consulta_9','grafico'));

            }else if($aspecto=='p10'){
                    
                $consulta_10=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=10;
                return view('home', compact('consulta_10','grafico'));

            }else if($aspecto=='p11'){

                $consulta_11= \DB::table('built_environment')
                ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                ->join('form', 'built_environment.form_id', '=', 'form.id')
                ->join('patient', 'patient.id', '=', 'form.patient_id')
                ->where('patient.id_medico','=',\Auth::user()->id)
                ->select('questions.name','questions.id','built_environment.answer')
                ->get();

                $grafico=11;
                return view('home', compact('consulta_11','grafico')); 

            }else if($aspecto=='p12'){
                    
                $consulta_12=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=12;
                return view('home', compact('consulta_12','grafico'));

            }else if($aspecto=='p13'){
                    
                $consulta_13=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=13;
                return view('home', compact('consulta_13','grafico'));

            }else if($aspecto=='p14'){
                    
                $consulta_14=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=14;
                return view('home', compact('consulta_14','grafico'));

            }else if($aspecto=='p15'){
                    
                $consulta_15=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=15;
                return view('home', compact('consulta_15','grafico'));

            }else if($aspecto=='p16'){
                    
                $consulta_16=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=16;
                return view('home', compact('consulta_16','grafico'));

            }else if($aspecto=='p17'){
                    
                $consulta_17=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=17;
                return view('home', compact('consulta_17','grafico'));

            }else if($aspecto=='p18'){
                    
                $consulta_18=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=18;
                return view('home', compact('consulta_18','grafico'));

            }

//----------------------------------SUB REGION 1-----------------------------------------------------

        }else if( $region=='mag'){

            if($aspecto=='p1'){
                
                $consulta_1=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=1;
                return view('home', compact('consulta_1','grafico'));

            }else if($aspecto=='p2'){
                    
                $consulta_2=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=2;
                return view('home', compact('consulta_2','grafico'));

            }else if($aspecto=='p3'){
                    
                $consulta_3=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=3;
                return view('home', compact('consulta_3','grafico'));

            }else if($aspecto=='p4'){
                    
                $consulta_4=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=4;
                return view('home', compact('consulta_4','grafico'));

            }else if($aspecto=='p5'){
                    
                $consulta_5=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=5;
                return view('home', compact('consulta_5','grafico'));

            }else if($aspecto=='p6'){
                    
                $consulta_6=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=6;
                return view('home', compact('consulta_6','grafico'));

            }else if($aspecto=='p7'){
                    
                $consulta_7=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=7;
                return view('home', compact('consulta_7','grafico'));

            }else if($aspecto=='p8'){
                    
                $consulta_8=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=8;
                return view('home', compact('consulta_8','grafico'));

            }else if($aspecto=='p9'){
                    
                $consulta_9=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=9;
                return view('home', compact('consulta_9','grafico'));

            }else if($aspecto=='p10'){
                    
                $consulta_10=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=10;
                return view('home', compact('consulta_10','grafico'));

            }else if($aspecto=='p11'){

                $consulta_11= \DB::table('built_environment')
                ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                ->join('form', 'built_environment.form_id', '=', 'form.id')
                ->join('patient', 'patient.id', '=', 'form.patient_id')
                ->where('patient.subregion','=','MagdalenaCaldense')
                ->where('patient.id_medico','=',\Auth::user()->id)
                ->select('questions.name','questions.id','built_environment.answer')
                ->get();

                $grafico=11;
                return view('home', compact('consulta_11','grafico')); 

            }else if($aspecto=='p12'){
                    
                $consulta_12=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=12;
                return view('home', compact('consulta_12','grafico'));

            }else if($aspecto=='p13'){
                    
                $consulta_13=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=13;
                return view('home', compact('consulta_13','grafico'));

            }else if($aspecto=='p14'){
                    
                $consulta_14=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=14;
                return view('home', compact('consulta_14','grafico'));

            }else if($aspecto=='p15'){
                    
                $consulta_15=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=15;
                return view('home', compact('consulta_15','grafico'));

            }else if($aspecto=='p16'){
                    
                $consulta_16=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=16;
                return view('home', compact('consulta_16','grafico'));

            }else if($aspecto=='p17'){
                    
                $consulta_17=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=17;
                return view('home', compact('consulta_17','grafico'));

            }else if($aspecto=='p18'){
                    
                $consulta_18=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=18;
                return view('home', compact('consulta_18','grafico'));

            }

//----------------------------------SUB REGION 2-----------------------------------------------------

        }else if( $region=='alor'){

            if($aspecto=='p1'){
                
                $consulta_1=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=1;
                return view('home', compact('consulta_1','grafico'));

            }else if($aspecto=='p2'){
                    
                $consulta_2=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=2;
                return view('home', compact('consulta_2','grafico'));

            }else if($aspecto=='p3'){
                    
                $consulta_3=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=3;
                return view('home', compact('consulta_3','grafico'));

            }else if($aspecto=='p4'){
                    
                $consulta_4=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=4;
                return view('home', compact('consulta_4','grafico'));

            }else if($aspecto=='p5'){
                    
                $consulta_5=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=5;
                return view('home', compact('consulta_5','grafico'));

            }else if($aspecto=='p6'){
                    
                $consulta_6=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=6;
                return view('home', compact('consulta_6','grafico'));

            }else if($aspecto=='p7'){
                    
                $consulta_7=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=7;
                return view('home', compact('consulta_7','grafico'));

            }else if($aspecto=='p8'){
                    
                $consulta_8=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=8;
                return view('home', compact('consulta_8','grafico'));

            }else if($aspecto=='p9'){
                    
                $consulta_9=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=9;
                return view('home', compact('consulta_9','grafico'));

            }else if($aspecto=='p10'){
                    
                $consulta_10=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=10;
                return view('home', compact('consulta_10','grafico'));

            }else if($aspecto=='p11'){

                $consulta_11= \DB::table('built_environment')
                ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                ->select('questions.name','questions.id','built_environment.answer')
                ->get();
                $grafico=11;
                return view('home', compact('consulta_11','grafico')); 

            }else if($aspecto=='p12'){
                    
                $consulta_12=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=12;
                return view('home', compact('consulta_12','grafico'));

            }else if($aspecto=='p13'){
                    
                $consulta_13=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=13;
                return view('home', compact('consulta_13','grafico'));

            }else if($aspecto=='p14'){
                    
                $consulta_14=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=14;
                return view('home', compact('consulta_14','grafico'));

            }else if($aspecto=='p15'){
                    
                $consulta_15=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=15;
                return view('home', compact('consulta_15','grafico'));

            }else if($aspecto=='p16'){
                    
                $consulta_16=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=16;
                return view('home', compact('consulta_16','grafico'));

            }else if($aspecto=='p17'){
                    
                $consulta_17=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=17;
                return view('home', compact('consulta_17','grafico'));

            }else if($aspecto=='p18'){
                    
                $consulta_18=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=18;
                return view('home', compact('consulta_18','grafico'));

            }

//----------------------------------SUB REGION 3-----------------------------------------------------            

        }else if( $region=='nor'){
            if($aspecto=='p1'){
                
                $consulta_1=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=1;
                return view('home', compact('consulta_1','grafico'));

            }else if($aspecto=='p2'){
                    
                $consulta_2=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=2;
                return view('home', compact('consulta_2','grafico'));

            }else if($aspecto=='p3'){
                    
                $consulta_3=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=3;
                return view('home', compact('consulta_3','grafico'));

            }else if($aspecto=='p4'){
                    
                $consulta_4=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=4;
                return view('home', compact('consulta_4','grafico'));

            }else if($aspecto=='p5'){
                    
                $consulta_5=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=5;
                return view('home', compact('consulta_5','grafico'));

            }else if($aspecto=='p6'){
                    
                $consulta_6=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=6;
                return view('home', compact('consulta_6','grafico'));

            }else if($aspecto=='p7'){
                    
                $consulta_7=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=7;
                return view('home', compact('consulta_7','grafico'));

            }else if($aspecto=='p8'){
                    
                $consulta_8=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=8;
                return view('home', compact('consulta_8','grafico'));

            }else if($aspecto=='p9'){
                    
                $consulta_9=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=9;
                return view('home', compact('consulta_9','grafico'));

            }else if($aspecto=='p10'){
                    
                $consulta_10=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=10;
                return view('home', compact('consulta_10','grafico'));

            }else if($aspecto=='p11'){

                $consulta_11= \DB::table('built_environment')
                ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                ->select('questions.name','questions.id','built_environment.answer')
                ->get();
                $grafico=11;
                return view('home', compact('consulta_11','grafico')); 

            }else if($aspecto=='p12'){
                    
                $consulta_12=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=12;
                return view('home', compact('consulta_12','grafico'));

            }else if($aspecto=='p13'){
                    
                $consulta_13=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=13;
                return view('home', compact('consulta_13','grafico'));

            }else if($aspecto=='p14'){
                    
                $consulta_14=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=14;
                return view('home', compact('consulta_14','grafico'));

            }else if($aspecto=='p15'){
                    
                $consulta_15=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=15;
                return view('home', compact('consulta_15','grafico'));

            }else if($aspecto=='p16'){
                    
                $consulta_16=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=16;
                return view('home', compact('consulta_16','grafico'));

            }else if($aspecto=='p17'){
                    
                $consulta_17=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=17;
                return view('home', compact('consulta_17','grafico'));

            }else if($aspecto=='p18'){
                    
                $consulta_18=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=18;
                return view('home', compact('consulta_18','grafico'));

            }

//----------------------------------SUB REGION 4-----------------------------------------------------            

        }else if( $region=='alocc'){
            if($aspecto=='p1'){
                
                $consulta_1=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=1;
                return view('home', compact('consulta_1','grafico'));

            }else if($aspecto=='p2'){
                    
                $consulta_2=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=2;
                return view('home', compact('consulta_2','grafico'));

            }else if($aspecto=='p3'){
                    
                $consulta_3=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=3;
                return view('home', compact('consulta_3','grafico'));

            }else if($aspecto=='p4'){
                    
                $consulta_4=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=4;
                return view('home', compact('consulta_4','grafico'));

            }else if($aspecto=='p5'){
                    
                $consulta_5=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=5;
                return view('home', compact('consulta_5','grafico'));

            }else if($aspecto=='p6'){
                    
                $consulta_6=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=6;
                return view('home', compact('consulta_6','grafico'));

            }else if($aspecto=='p7'){
                    
                $consulta_7=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=7;
                return view('home', compact('consulta_7','grafico'));

            }else if($aspecto=='p8'){
                    
                $consulta_8=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=8;
                return view('home', compact('consulta_8','grafico'));

            }else if($aspecto=='p9'){
                    
                $consulta_9=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=9;
                return view('home', compact('consulta_9','grafico'));

            }else if($aspecto=='p10'){
                    
                $consulta_10=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=10;
                return view('home', compact('consulta_10','grafico'));

            }else if($aspecto=='p11'){

                $consulta_11= \DB::table('built_environment')
                ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                ->select('questions.name','questions.id','built_environment.answer')
                ->get();
                $grafico=11;
                return view('home', compact('consulta_11','grafico')); 

            }else if($aspecto=='p12'){
                    
                $consulta_12=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=12;
                return view('home', compact('consulta_12','grafico'));

            }else if($aspecto=='p13'){
                    
                $consulta_13=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=13;
                return view('home', compact('consulta_13','grafico'));

            }else if($aspecto=='p14'){
                    
                $consulta_14=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=14;
                return view('home', compact('consulta_14','grafico'));

            }else if($aspecto=='p15'){
                    
                $consulta_15=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=15;
                return view('home', compact('consulta_15','grafico'));

            }else if($aspecto=='p16'){
                    
                $consulta_16=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=16;
                return view('home', compact('consulta_16','grafico'));

            }else if($aspecto=='p17'){
                    
                $consulta_17=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=17;
                return view('home', compact('consulta_17','grafico'));

            }else if($aspecto=='p18'){
                    
                $consulta_18=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=18;
                return view('home', compact('consulta_18','grafico'));

            }

//----------------------------------SUB REGION 5-----------------------------------------------------                        

        }else if( $region=='bjocc'){
            if($aspecto=='p1'){
                
                $consulta_1=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=1;
                return view('home', compact('consulta_1','grafico'));

            }else if($aspecto=='p2'){
                    
                $consulta_2=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=2;
                return view('home', compact('consulta_2','grafico'));

            }else if($aspecto=='p3'){
                    
                $consulta_3=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=3;
                return view('home', compact('consulta_3','grafico'));

            }else if($aspecto=='p4'){
                    
                $consulta_4=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=4;
                return view('home', compact('consulta_4','grafico'));

            }else if($aspecto=='p5'){
                    
                $consulta_5=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=5;
                return view('home', compact('consulta_5','grafico'));

            }else if($aspecto=='p6'){
                    
                $consulta_6=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=6;
                return view('home', compact('consulta_6','grafico'));

            }else if($aspecto=='p7'){
                    
                $consulta_7=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=7;
                return view('home', compact('consulta_7','grafico'));

            }else if($aspecto=='p8'){
                    
                $consulta_8=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=8;
                return view('home', compact('consulta_8','grafico'));

            }else if($aspecto=='p9'){
                    
                $consulta_9=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=9;
                return view('home', compact('consulta_9','grafico'));

            }else if($aspecto=='p10'){
                    
                $consulta_10=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=10;
                return view('home', compact('consulta_10','grafico'));

            }else if($aspecto=='p11'){

                $consulta_11= \DB::table('built_environment')
                ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                ->select('questions.name','questions.id','built_environment.answer')
                ->get();
                $grafico=11;
                return view('home', compact('consulta_11','grafico')); 

            }else if($aspecto=='p12'){
                    
                $consulta_12=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=12;
                return view('home', compact('consulta_12','grafico'));

            }else if($aspecto=='p13'){
                    
                $consulta_13=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=13;
                return view('home', compact('consulta_13','grafico'));

            }else if($aspecto=='p14'){
                    
                $consulta_14=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=14;
                return view('home', compact('consulta_14','grafico'));

            }else if($aspecto=='p15'){
                    
                $consulta_15=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=15;
                return view('home', compact('consulta_15','grafico'));

            }else if($aspecto=='p16'){
                    
                $consulta_16=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=16;
                return view('home', compact('consulta_16','grafico'));

            }else if($aspecto=='p17'){
                    
                $consulta_17=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=17;
                return view('home', compact('consulta_17','grafico'));

            }else if($aspecto=='p18'){
                    
                $consulta_18=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=18;
                return view('home', compact('consulta_18','grafico'));

            }

//----------------------------------SUB REGION 6-----------------------------------------------------                                    

        }else if( $region=='cs'){
            
            if($aspecto=='p1'){
                
                $consulta_1=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=1;
                return view('home', compact('consulta_1','grafico'));

            }else if($aspecto=='p2'){
                    
                $consulta_2=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=2;
                return view('home', compact('consulta_2','grafico'));

            }else if($aspecto=='p3'){
                    
                $consulta_3=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=3;
                return view('home', compact('consulta_3','grafico'));

            }else if($aspecto=='p4'){
                    
                $consulta_4=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=4;
                return view('home', compact('consulta_4','grafico'));

            }else if($aspecto=='p5'){
                    
                $consulta_5=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=5;
                return view('home', compact('consulta_5','grafico'));

            }else if($aspecto=='p6'){
                    
                $consulta_6=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=6;
                return view('home', compact('consulta_6','grafico'));

            }else if($aspecto=='p7'){
                    
                $consulta_7=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=7;
                return view('home', compact('consulta_7','grafico'));

            }else if($aspecto=='p8'){
                    
                $consulta_8=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=8;
                return view('home', compact('consulta_8','grafico'));

            }else if($aspecto=='p9'){
                    
                $consulta_9=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=9;
                return view('home', compact('consulta_9','grafico'));

            }else if($aspecto=='p10'){
                    
                $consulta_10=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=10;
                return view('home', compact('consulta_10','grafico'));

            }else if($aspecto=='p11'){

                $consulta_11= \DB::table('built_environment')
                ->join('questions', 'built_environment.question_id', '=', 'questions.id')
                ->select('questions.name','questions.id','built_environment.answer')
                ->get();
                $grafico=11;
                return view('home', compact('consulta_11','grafico')); 

            }else if($aspecto=='p12'){
                    
                $consulta_12=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=12;
                return view('home', compact('consulta_12','grafico'));

            }else if($aspecto=='p13'){
                    
                $consulta_13=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=13;
                return view('home', compact('consulta_13','grafico'));

            }else if($aspecto=='p14'){
                    
                $consulta_14=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=14;
                return view('home', compact('consulta_14','grafico'));

            }else if($aspecto=='p15'){
                    
                $consulta_15=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=15;
                return view('home', compact('consulta_15','grafico'));

            }else if($aspecto=='p16'){
                    
                $consulta_16=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=16;
                return view('home', compact('consulta_16','grafico'));

            }else if($aspecto=='p17'){
                    
                $consulta_17=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=17;
                return view('home', compact('consulta_17','grafico'));

            }else if($aspecto=='p18'){
                    
                $consulta_18=\DB::table('algo1')
                ->join('algo2', 'algo1.id', '=', 'algo2.id')
                ->select('algo1.name','algo2.name')
                ->get();
                $grafico=18;
                return view('home', compact('consulta_18','grafico'));

            }
        }
    }
}