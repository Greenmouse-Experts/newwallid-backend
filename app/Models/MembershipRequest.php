<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipRequest extends Model
{
    use HasFactory;

    protected $fillable = ['role', 'individual_id','organization_id','status'];


    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }


    public function individual()
    {
        return $this->belongsTo('App\Models\Individual');
    }

}
