<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IDTemplate extends Model
{
    use HasFactory;
    protected $fillable  = ['organization_id', 'background_color', 'text_color', 'role', 'logo', 'path'];
}
