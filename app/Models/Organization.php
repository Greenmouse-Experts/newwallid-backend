<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'type', 'employees', 'phone', 'id_card_number', 'address'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public static function member_size($org_id) {
        $members = Member::where(['organization_id' => $org_id])
            ->get();

        return sizeof($members);
    }
}
