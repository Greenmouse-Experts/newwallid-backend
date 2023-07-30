<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $fillable  = ['name','description','price', 'organization_id','validity'];

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

    // public static function subscribers()
    // {
    //     return $this->hasMany('App\Models\')
    // }

}
