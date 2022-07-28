<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'subscription_id', 'reference','amount','status','paid_at','channel','fees','ip_address'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

}
