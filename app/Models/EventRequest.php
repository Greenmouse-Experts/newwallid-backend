<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRequest extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'event_id', 'status', 'sender_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function sender()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }
}
