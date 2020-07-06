<?php

namespace App\Http\Controllers;

use App\HTTP\Controllers\Controller;

class TestController extends Controller
{
    public function show(){
        if(view()->exists('test.layouts.page')){
            return view ('test.layouts.page')->with('title','page');
        }
        else abort(404);
            
        }
}
?>
