<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContactRequest;



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

    public function showCont(){    
        return view('test.mainContact')->with('title','contact');    
    }

    public function saveCont(Request $request)
    {   
        if($request->isMethod('post')){
            // $request->flash();
            $rules = [
                        'firstName'=>'required|max:20',
                        'lastName'=>'required|max:30',
                        'email'=>'required|email',
                     ];
            $messages = [
                'firstName.required'=>'Поле :attribute обязательно к заполнению!',
                'lastName.required'=>'Поле :attribute обязательно к заполнению!',
    
                'email.required'=>'Поле :attribute обязательно к заполнению!',
                'email.email'=>'Поле :attribute должно являться email адресом(Mail@Mail.ru)!',
                         ];
            // $this->validate($request,$rules,);
            // dump($request->all());

            // $validator->sometimes('');

            $validator = Validator::make($request->all(),$rules,$messages);

            // $validator->after(function($validator){
                    
            //     $validator->errors()->add('firstName','++ываыпывп');

            // });

             if($validator->fails()){
                $message = $validator->errors();
                // dump($message->first('email'));    
            }
            return redirect()->route('contact')->withErrors($validator)->withInput();
        }
        
        return view('test.mainContact')->with('title','contact');
        
    }

}

    