<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    use HasFactory;
    
    protected $fillable = ['firstname', 'lastname', 'user_id', 'id_card_number', 'phone'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
