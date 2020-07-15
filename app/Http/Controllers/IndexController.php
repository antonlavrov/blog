<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class IndexController extends Controller
{
    // protected $request;

    public function showMain()
    {
        if (view()->exists('test.index')) {
            $view= view('test.index')->withTitle('memento')->render();
            return response($view);
        } 
        
        abort(404);
    }

    public function showAuth()
    {
        if (view()->exists('test.layouts.auth')) {
            return view('test.layouts.auth')->with('title','Auth');
        }
        
        abort(404);      
    }

    public function showCont(Request $request)
    {    
        return view('test.mainContact')->with('title','contact');    
    }

    public function saveCont(Request $request)
    {   
        if($request->isMethod('post')){
            $request->flash();
        }
        return redirect('/contact');
        
    }

}

    