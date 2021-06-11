<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function create()
    {
        return view('creatingPost');
    }
    
    public function store(Request $request){
    

        $patient=$request->file("patient_pic");

        $repo=$request->file("med_repo");

        $image_patient_name=time().'_'.$patient->getClientOriginalName();
        
        $docu_repo_name=time().'_'.$repo->getClientOriginalName();


        $patient->move(\public_path("patient-profile-pic/"),$image_patient_name);
        $repo->move(\public_path("med-document"),$docu_repo_name);


        post::create([
             // 'user_id'=>$user->id,
            //  'first_name'=>$request->fname,
            //  'last_name'=>$request->lname,
            'NIC_number'=>$request->nic,
             'description'=>$request->description,
             'phone_number'=>$request->phoneNumber,
             'address'=>$request->address,
             'donation_amount'=>$request->rqAmount,
             'required_date'=>$request->date,
             'patient_picture'=>$image_patient_name,
             'med_report'=>$docu_repo_name,

        ]);
         


        // $patient=$request->file("patient_pic");
        // $repo=$request->file("med_repo");

        // $image_patient_name=time().'_'.$patient->getClientOriginalName();
        // $docu_repo_name=time().'_'.$repo->getClientOriginalName();

        // $patient->move(\public_path("patient-profile-pic/"),$image_patient_name);
        // $repo->move(\public_path("med-document/"),$docu_repo_name);


        //  $post = new post([
        //     // 'user_id'=>$user->id,
        //     'first_name'=>$request->fname,
        //     'last_name'=>$request->lname,
        //     'description'=>$request->description,
        //     'phone_number'=>$request->phoneNumber,
        //     'address'=>$request->address,
        //     'donation_amount'=>$request->rqAmount,
        //     'required_date'=>$request->date,
        //     'patient_picture'=>$image_patient_name,
        //     'med_report'=>$docu_repo_name,
        // ]);
        // $post->save();
    
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
