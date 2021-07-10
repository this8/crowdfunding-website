<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'Category',
        'NIC_number',
        'age',
        'description',
        'phone_number',
        'address',
        'donation_amount',
        'required_date',
        'patient_picture',
        'med_report',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}