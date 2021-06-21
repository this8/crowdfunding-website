<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
    'Category',
    'NIC_number',
    'description',
    'phone_number',
    'address',
    'donation_amount',
    'required_date',
    'patient_picture',
    'med_report',
    ];
}
