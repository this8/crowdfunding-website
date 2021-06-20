<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        
    }


    public function create()
    {
        return view('form');
    }

 
    public function store(Request $request)
    {
        $patient=$request->file("patient_pic");

        $repo=$request->file("med_repo");

        $image_patient_name=time().'_'.$patient->getClientOriginalName();
        
        $docu_repo_name=time().'_'.$repo->getClientOriginalName();


        $patient->move(\public_path("patients/".$request->nic."/patient-profile-pic/"),$image_patient_name);
        $repo->move(\public_path("patients/".$request->nic."/med-document/"),$docu_repo_name);


        Post::create([
             // 'user_id'=>$user->id,
            //  'first_name'=>$request->fname,
            //  'last_name'=>$request->lname,
            'Category'=>$request->category,
            'NIC_number'=>$request->nic,
            'description'=>$request->description,
            'phone_number'=>$request->phoneNumber,
            'address'=>$request->address,
            'donation_amount'=>$request->rqAmount,
            'required_date'=>$request->date,
            'patient_picture'=>$image_patient_name,
            'med_report'=>$docu_repo_name,

        ]);
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
