<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function competences()
    {
        return $this->hasMany('App\Competence');
    }


    public function diplomes()
    {
        return $this->hasMany('App\Diplome');
    }


    public function experiences()
    {
        return $this->hasMany('App\Experience');
    }


    public function formations()
    {
        return $this->hasMany('App\Formation');
    }

    public function projets()
    {
        return $this->hasMany('App\Projet');
    }

    public function langues()
    {
        return $this->hasMany('App\Langue');
    }

}
