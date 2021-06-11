<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable=[
        // 'user_id',
        // 'first_name',
        // 'last_name',
        'phone_number',
        'description',
        'address',
        'donation_amount',
        'required_date',
        'patient_picture',
        'med_report',

    ];
}
