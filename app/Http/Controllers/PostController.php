<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        return view('creatingPost');
    }
    
    public function store(Request $request){
    
        post::create([
            'user_id'=>auth()->user()->id,
            'category'=>$request->category,
            'first_name'=>$request->fname,
            'last_name'=>$request->lname,
            'phone_number'=>$request->phoneNumber,
            'address'=>$request->address,
            //'description'=>$request->
            'email'=>$request->email,
            'donation_amount'=>$request->rqAmount,
            'required_date'=>$request->date,
            'patient_picture'=>$request->patient_pic,
            'med_report_1'=>$request->report_1,
            'med_report_2'=>$request->report_2,
            'med_report_3'=>$request->report_3,
            'med_report_4'=>$request->report_4,
            'med_report_5'=>$request->report_5,
        ]);

        // $post->save();
         
        return back('home');
        
    
    }

    public function show(post $post)
    {
        
    }

 
    public function edit(post $post)
    {
        //
    }

    public function update(Request $request, post $post)
    {
        //
    }

    public function destroy(post $post)
    {
        //
    }
}
