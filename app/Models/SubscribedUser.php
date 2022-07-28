<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribedUser extends Model
{
    use HasFactory;
    protected $fillable  = ['user_id','subscription_id','amount_paid','expired_date'];
    protected $appends = ['last_subscription_date'];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function subscription(){
        return $this->belongsTo(Subscription::class, 'subscription_id');
    }

      public function getLastSubscriptionDateAttribute(){
        
        return self::latest()->first()->created_at;
    }

}
