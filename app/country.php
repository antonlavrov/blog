<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PDO;

class country extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
}
