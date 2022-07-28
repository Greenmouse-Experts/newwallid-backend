<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IDCardManagement extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'organization_id', 'individual_id', 'template_id', 'name', 'passport', 'path', 'id_card_number', 'issued_date', 'role', 'status', 'created_by'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

    public function individual()
    {
        return $this->belongsTo('App\Models\Individual');
    }

    public function template()
    {
        return $this->belongsTo('App\Models\IDTemplate', 'template_id');
    }
}
