<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $guarded = [];

    public function Ouvrage()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
