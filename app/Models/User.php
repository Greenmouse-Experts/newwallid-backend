<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use http\Env\Request;
use http\Url;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

//MustVerifyEmail
class User extends Authenticatable implements JWTSubject
{
    // use HasApiTokens
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'type',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function typeData()
    {
        if ($this->type == 'individual') {
            return $this->hasOne('App\Models\Individual');
        }
        return $this->hasOne('App\Models\Organization');
    }

    public function ticketPlan()
    {
        return $this->hasOne('App\Models\TicketPlan');
    }


    public function organization()
    {
        return $this->hasOne('App\Models\Organization');
    }

    public function individual()
    {
        return $this->hasOne('App\Models\Individual');
    }

    public function sendPasswordResetNotification($token)
    {
//        http://127.0.0.1:8000/password/reset/e2369c3e6da14db12b1cd4ee0112f2a9dbc42e584a9dec44b9f8c0dffc8e6fc3?email=techcompany1%40gmail.com
        $baseurl = url('/');
//        $email = ;
        $url = $baseurl . "/password/reset/" . $token;
        $email = $this->email;
        $this->notify(new ResetPasswordNotification($url, $email));
    }


}
