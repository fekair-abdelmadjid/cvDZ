<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projet extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function cv(){
        return $this->belongsTo('App\Cv');
    }

}
