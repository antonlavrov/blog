<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    protected $request;

    public function showMain(){
    if(view()->exists('test.index')){
        return view ('test.index');
    }
    else abort(404);      
    }

    public function showAuth(){
        
        if(view()->exists('test.layouts.auth')){

            return view ('test.layouts.auth')->with('title','Auth');
             
        }
        else abort(404);      
        }

     public function showCont(Request $request){   
              return view ('test.mainContact')->with('title','contact');  
              print_r($request->all); 
              
         }
    
}
