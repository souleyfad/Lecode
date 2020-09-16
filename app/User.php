<?php

namespace App;

use App\Achat;
use App\Commentaire;
use App\Publication;
use App\Mail\WelcomeUserMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'pseudo', 'date_naissance', 'adresse', 'email', 'password', 'isEditeur', 'isAuteur', 'isClient',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot(){
        parent::boot();
        static::created(function ($user){
            Mail::to($user->email)->send(new WelcomeUserMail($user));
        });
    }

    public function Publication(){
        return $this->hasMany('App\Publication');
    }

    public function Commentaire(){
        return $this->hasMany('App\Commentaire');
    }

    public function Achats(){
        return $this->hasMany('App\Achat');
    }

}
