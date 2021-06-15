<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heart_post extends Model
{
    use HasFactory;

    protected $fillable=[
        'User_id',
        'fname',
        'lname',
        'PhoneNumber',
        'Adaddress',
        'S_description',
        'rqAmount',
        'rqDate',
        'profile',
        'report'
    ];
}
