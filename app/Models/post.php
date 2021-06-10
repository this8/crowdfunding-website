<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'category',
        'first_name',
        'last_name',
        'phone_number',
        'address',
        'description',
        'email',
        'donation_amount',
        'required_date',
        'patient_picture',
        'med_report_1',
        'med_report_2',
        'med_report_3',
        'med_report_4',
        'med_report_5',
    ];
}
