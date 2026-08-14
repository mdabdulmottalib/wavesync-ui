<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'email',
    'phone',
    'company',
    'service',
    'budget_range',
    'referral_source',
    'message',
    'status',
])]
class Contact extends Model
{
    protected $casts = [
        'service' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
