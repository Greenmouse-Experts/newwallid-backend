<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table ="members";

    protected $fillable = ['role','individual_id','subscription_id','status', 'organization_id', 'access_status','membership_request_id'];

    public function individual()
    {
        return $this->belongsTo('App\Models\Individual');
    }

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization', 'organization_id');
    }


    public function subscription()
    {
        return $this->belongsTo('App\Models\Subscription', 'subscription_id');
    }

    public function membership_request()
    {
        return $this->belongsTo('App\Models\MembershipRequest');
    }

}
