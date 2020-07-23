<?php

namespace App\Http\Controllers;

use App\HTTP\Controllers\Controller;
use Facade\Ignition\QueryRecorder\Query;
use Facade\Ignition\SolutionProviders\RunningLaravelDuskInProductionProvider;
use Illuminate\Support\Facades\DB;
use App\article;
use App\country;
use App\user;
use App\role;



class TestController extends Controller
{

    //protected static $articles;

   

    public function __construct() {
        
    }

    public  function getArticles(){
     
        // $article = article::find(9);
        // $article->name = 'pososeh?';
        // echo $article->name;
        //dump($article);

        $article = article::find(9);
        // $arr = ['key'=>'TEST_ARTICLES'];
        // $article->text = $arr;
        // $article->save();
        dump($article->toJson());



      return ;
    }


    public function show(){

        
        if(view()->exists('test.layouts.page')){
    
            //  DB::table('articles')->orderBy('name')->chunk(3,function($articles){
            //     foreach($articles as $article){
            //         TestController::addArticles($article);
            //     }                                          
            // });

            // $Query = DB::table('articles')->select('id','name')->distinct();
            // $articles=DB::table('articles')->take(2)->skip(4)->get();
            // DB::table('articles')->insert(
            //                                 [

            //                                     ['name'=>'Ivan','text'=>'POSHEL V PIZDU'],
            //                                     ['name'=>'serGEY','text'=>'POSHEL V 3ADNICU'],

            //                                 ]
            //  

            DB::TABLE('articles')->where('name','Ivan')->update(['name'=>'EBAN']);
            $articles= DB::select('SELECT * FROM articles');                     
             dump($articles);
                

            return view ('test.layouts.page')->with('title','page');
            
        }else abort(404);    
        }

        
      
}
?>
