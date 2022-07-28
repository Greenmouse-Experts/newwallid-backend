<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'event_id', 'category_id'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function ticketCategory()
    {
        return $this->belongsTo('App\Models\TicketCategory','category_id');
    }


    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function payment()
    {
        return $this->hasOne('App\Models\Payment');
    }


}
