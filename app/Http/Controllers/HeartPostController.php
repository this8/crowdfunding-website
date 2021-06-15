<?php

namespace App\Http\Controllers;
use App\Models\heart_post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeartPostController extends Controller
{
    public function store(Request $request){
          heart_post::create([
            'User_id'=>auth()->user()->id,
            'Fname'=>$request->fname,
            'Lname'=>$request->lname,
            'Contact_no'=>$request->PhoneNumber,
            'Address'=>$request->address,
            'Description'=>$request->S_description,
            'Required_amount'=>$request->rqAmount,
            'Required_date'=>$request->rqDate,
            'Profile_pic'=>$request->profile,
            'Reports'=>$request->report
        ]);
        return view('heart_post');

    }
    

}
