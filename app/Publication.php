<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public function User(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function Genre()
    {
        return $this->belongsTo('App\Genre', 'Genre_id', 'id');
    }
}
