<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        if (request('category') == 1000) {
            $posts = Post::WHERE('category_id', 1000)->get();
        } elseif (request('category') == 1001) {
            $posts = Post::WHERE('category_id', 1001)->get();
        } elseif (request('category') == 1002) {
            $posts = Post::WHERE('category_id', 1002)->get();
        } elseif (request('category') == 1003) {
            $posts = Post::WHERE('category_id', 1003)->get();
        } elseif (request('category') == 1004) {
            $posts = Post::WHERE('category_id', 1004)->get();
        } else {
            $posts = Post::all();
        }
        
        return view('posts.index', [
            'posts' => $posts, 
        ]);
    }  

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', [
            'categories' => $categories,
        ]);
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'categoryId' => 'required',
            'nic' => 'required',
            'age' => 'required',
            'description' => 'required',
            'phoneNumber' => 'required',
            'address' => 'required',
            'rqAmount' => 'required',
            'date' => 'required',
            'patient_pic' => 'required',
            'med_repo' => 'required',
            'acNum' => 'required',
            'bankName' => 'required',
            'brName' => 'required'
        ]);

        $patient = $request->file("patient_pic");

        $repo = $request->file("med_repo");

        $image_patient_name = time().'_'.$patient->getClientOriginalName();
        
        $docu_repo_name = time().'_'.$repo->getClientOriginalName();

        $patient->move(\public_path("patients/".$request->nic."/patient-profile-pic/"),$image_patient_name);
        $repo->move(\public_path("patients/".$request->nic."/med-document/"),$docu_repo_name);

        $post = new Post;
        $post->user_id = Auth::id();
        $post->category_id = $request->categoryId;
        $post->NIC_number = $request->nic;
        $post->Age = $request->age;
        $post->description = $request->description;
        $post->phone_number = $request->phoneNumber;
        $post->address = $request->address;
        $post->donation_amount = $request->rqAmount;
        $post->required_date = $request->date;
        $post->patient_picture = $image_patient_name;
        $post->med_report = $docu_repo_name;
        $post->bank_account_no = $request->acNum;
        $post->bank_name = $request->bankName;
        $post->branch_name = $request->brName;

        $post->save();

        return redirect('posts/'.$post->id);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post, 
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post, 
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            "category_id" => "required",
            "NIC_number" => "required",
            "Age" => "required",
            "description" => "required",
            "phone_number" => "required",
            "address" => "required",
            "donation_amount" => "required",
            "required_date" => "required",
            "bank_account_no" => "required",
            "bank_name" => "required",
            "branch_name" => "required"
        ]);

        $post->update([
            'category_id' => $request->categoryId,
            'Age' => $request->age,
            'NIC_number' => $request->nic,
            'description' => $request->description,
            'phone_number' => $request->phoneNumber,
            'address' => $request->address,
            'donation_amount' => $request->rqAmount,
            'required_date' => $request->date,
            'bank_account_no'=>$request->acNum,
            'bank_name'=>$request->bankName,
            'branch_name'=>$request->brName,
        ]);

        return redirect('posts/'.$post->id);
    }

    public function delete(Post $post)
    {
        if (file_exists("patients/".$post->nic."/patient-profile-pic/".$post->patient_picture))
            unlink("patients/".$post->nic."/patient-profile-pic/".$post->patient_picture);
    
        $post->delete();
        
        return redirect('home');
    }
}
