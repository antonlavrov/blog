<?php

namespace App\Http\Controllers;

use Dotenv\Result\Result;
use Illuminate\Http\Request;

class learnController extends Controller
{
    public function showTest(){


        $goods= [
         [
            'titl'=>'nokia',
            'pric'=>'sssssss',
            'descriptio'=>'krutoy',
         ],
         [
            'title'=>'sex',
            'price'=>'2000',
            'description'=>'klass',
         ]];
        

        // $a = array('stas','anton','hleb',);
        // $a[5]='mansorik';
        // $a[]='maslo';
        for($i=0;$i<count($goods);$i++){ 
        foreach($goods[$i] as $key => $good){
            echo $key.'-'.$good.'<br>';
            echo '<br>';  
        }
        }   
        
        
        

        
        


        //dd($arr[2]) ;
        return view('test.layouts.learn')->with('title','learnPHP');
    }
    
}
