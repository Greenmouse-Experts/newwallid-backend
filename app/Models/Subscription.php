<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable  = ['status', 'individual_id', 'expiry_date', 'subscription_plan_id', 'organization_id'];

    // protected $appends = ['last_subscription_date'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function individual()
    {
        return $this->belongsTo('App\Models\Individual');
    }

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

    public function subscription_plan()
    {
        return $this->belongsTo('App\Models\SubscriptionPlan');
    }

    public function payment()
    {
        return $this->hasOne('App\Models\Payment');
    }

    public function expired_subscribers()
    {
        return $this->hasMany(Member::class);
    }

    public function valid_subscribers()
    {
        return $this->hasMany(Member::class);
    }
}
