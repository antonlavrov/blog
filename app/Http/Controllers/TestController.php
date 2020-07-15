<?php

namespace App\Http\Controllers;

use App\HTTP\Controllers\Controller;
use Facade\Ignition\QueryRecorder\Query;
use Facade\Ignition\SolutionProviders\RunningLaravelDuskInProductionProvider;
use Illuminate\Support\Facades\DB;
use App\article;


class TestController extends Controller
{

    //protected static $articles;

    public function __construct() {
        
    }

    public  function getArticles(){
    //    $articles = article::where('id','>=',2)->orderBy('name')->take(2)->get();
    //    foreach($articles as $article){
    //        echo $article->img.'<br />';
    //    }
    // $articles = article::findOrFail();
    //echo $articles->name;
    // $article= new Article();
    // $article->name='New article';
    // $article->text='New article';
    // $article=Article::find(11);
    // $article->text = 'New text';
    // $article->save();
   
        // Article::create(
        //                 [
        //                     'name'=>'vasya',
        //                     'text'=>'pososeh?'
        //                 ]
        //                 );


        // article::firstOrCreate([
        //                             'name'=>'vasya2',
        //                             'text'=>'pososeh2?'
        //                       ]);
        // $article = article::firstOrNew([
        //                         'name'=>'vasya3',
        //                         'text'=>'pososeh3?'
        //                     ]);
        // $article->save();
        // $article=article::find(15);
        // $article->delete();
        //article::destroy(14);
        // $articles = article::withTrashed()->get();
        // foreach($articles as $article){
        //     if($article->trashed()){
        //         echo $article->name.' was deleted <br />';
        //         $article->restore();
        //     }else{
        //         echo $article->name.' not deleted <br />';
        //     }
        // }
       // $article->delete();
        //$articles=Article::all();
        // $articles=Article::find(12);
        // $articles->forceDelete();
       // dump($articles);
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
