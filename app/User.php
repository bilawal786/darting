<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Auth;

class User extends Authenticatable
{

    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'email', 'password','lname','phone','address','role', 'gender', 'date', 'about','sport','sortie','game','divers','country',
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

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function hasSubscription(){
        $user = Auth::user();
       
        if ($user->subscribed('main')){
            return true;
        }else{
            return false;
        }
    }
}
