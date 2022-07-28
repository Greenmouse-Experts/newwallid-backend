<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'type', 'employees', 'phone', 'id_card_number', 'address'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
