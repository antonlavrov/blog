<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class article extends Model
{
    use SoftDeletes;
    protected $table = 'articles';
    protected $primaryKey='id';
    public $incrementing=true;
    public $timestamps=true;
    protected $fillable=['name','text'];
    protected $guarded=['*'];
    protected $dates = ['deleted_at'];
    protected $casts = [
                        'name'=>'string',
                        'text'=>'array',
                        ];

    public function user(){

        return $this->belongsTo('App\User');

    }

    
    public function getNameAttribute($value){

        return 'Hello world - '.$value;

    }


    public function setNameAttribute($value){

        $this->attributes['name'] = '|'.$value.'|';

    }
}
