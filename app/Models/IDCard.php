<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IDCard extends Model
{
    use HasFactory;
    protected $table = "id_cards";
    protected $fillable = ['user_id', 'organization_id', 'individual_id', 'layout', 'firstname', 'lastname', 'middle_name', 'passport', 'id_card_number', 'issued_date', 'expiry_date', 'template_name', 'category', 'role', 'qr_code', 'qr_code_url'];

    protected $appends = ['passport_path', 'logo_path'];

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
        return $this->belongTo('App\Models\IDTemplate');
    }


    // public function getPassportPathAttribute()
    // {
    //     return url('storage/app/' . $this->passport);
    // }

    // public function getLogoPathAttribute()
    // {
    //     return url('storage/app/' . $this->logo_url);
    // }
}
