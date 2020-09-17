<?php

namespace App;

use App\Ouvrage;
use App\Publication;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name', 'slug'];
    public function Ouvrage()
    {
        return $this->hasMany('App\Ouvrage');
    }

    public function Publication()
    {
        return $this->hasMany('App\Publication');
    }
}
