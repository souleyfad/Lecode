<?php

namespace App;

use App\Genre;
use Illuminate\Database\Eloquent\Model;

class Ouvrage extends Model
{
    public function Commentaire()
    {
        return $this->morphMany('App\Commentaire', 'Ouvrage')->latest();
    }

    public function Genre()
    {
        return $this->belongsTo('App\Genre', 'Genre_id', 'id');
    }
}
