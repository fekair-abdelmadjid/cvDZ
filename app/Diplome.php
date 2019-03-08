<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function cv(){
        return $this->belongsTo('App\Cv');
    }
}
