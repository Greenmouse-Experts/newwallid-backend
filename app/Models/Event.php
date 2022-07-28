<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','venue','tickets','type', 'user_id','image', 'category_id', 'venue_image', 'description', 'price', 'isFree', 'start_date','end_date', 'start_time','end_time', 'pricing', 'unique_id',];


    protected $casts = [
        'category_id' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function attendees()
    {
        return $this->hasMany(Ticket::class);
    }


    public function ticketCategories()
    {
        return $this->hasMany('App\Models\TicketCategory');
    }


    public function category()
    {
        return $this->belongsTo('App\Models\Category');

    }

}
