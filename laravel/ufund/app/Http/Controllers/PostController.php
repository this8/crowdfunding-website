<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{

    public function index()
    {
        $posts=Post::all();
        return view('posts/posts')->with('posts',$posts);
    }  

    public function create()
    {
        return view('/posts/form');
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

        return redirect('/post');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('posts/edit')->with('post',$post);
    }

    public function update(Request $request, $id)
    {
        $post=Post::findOrFail($id);

        //store picture and medical report in the patient folder
     
            
            // if(File::exists("patients/".$request->nic."/patient-profile-pic/".$post->patient_pic)){
            //     File::delete("patients/".$request->nic."/patient-profile-pic/".$post->patient_pic);

            //     $patient=$request->file("patient_pic");    
            //     $image_patient_name=time().'_'.$patient->getClientOriginalName();
            //     $patient->move(\public_path("patients/".$request->nic."/patient-profile-pic/"),$image_patient_name); 
    
            // // }

           
      
            // $repo=$request->file("med_repo");
            // $docu_repo_name=time().'_'.$repo->getClientOriginalName();
            // $repo->move(\public_path("patients/".$request->nic."/med-document/"),$docu_repo_name);

      

        // update data in the database
        $post->update([
            'Category'=>$request->category,
            'NIC_number'=>$request->nic,
            'description'=>$request->description,
            'phone_number'=>$request->phoneNumber,
            'address'=>$request->address,
            'donation_amount'=>$request->rqAmount,
            'required_date'=>$request->date,
            // 'patient_picture'=>$image_patient_name,
            // 'med_report'=>$docu_repo_name,
        ]);
        return redirect('post');
    }

    public function destroy($id)
    {
        $post=Post::findOrFail($id);

        if(file_exists("patients/".$post->nic."/patient-profile-pic/".$post->patient_picture))
            unlink("patients/".$post->nic."/patient-profile-pic/".$post->patient_picture);
    
        $post->delete();
        return back();
    }
}
