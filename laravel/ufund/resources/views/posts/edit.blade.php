@extends('layouts.layout')
@section('bs4')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
          crossorigin="anonymous"
    >
@endsection
@section('content')

<!-- Edit post -->

<div class="container">
        <form class="form-group text-center" method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
                <div id="ui">
                        <h1 style="color: red; text-align: center;">Edit Campaign</h1>
                    <div class="row">
                        <div class="col-lg-6">
        
                            <div class="row">
                                <div class="col-lg-12">
                                    <label> Category </label>
                                    <select class="form-control" name="categoryId">
                                        <option value="{{$post->category->id}}" selected>{{$post->category->name}}</option>
                                        <option value="1000">Heart</option>
                                        <option value="1001">Cancer</option>
                                        <option value="1002">Vision</option>
                                        <option value="1003">Infants</option>
                                        <option value="1004">Other</option>
                                    </select>
                                </div>
            
                                <br> <br>
            
                                <div class="col-lg-12">
            
                                        <label>Age</label>
                                        <input type="number" name="age" class="form-control round_input"  value="{{$post->Age}}">
            
                                        <br>
                                </div>
            
                                <div class="col-lg-12">
                                    <br>
            
                                    <div class="alert alert-danger" style="border-radius: 20px; " role="alert">
                                        <a  class="alert-link">If patient is less than 16 years old,<br> Enter parent's NIC number</a>.
                                    </div>
                                    <label>Enter Your NIC number</label>
                                    <input type="text" name="nic" class="form-control round_input" value="{{$post->NIC_number}}">
                                </div>
            
                                <div class="col-lg-12">
                                    <br>
                                    <label>Description About patient</label>
            
                                    <textarea class="form-control round_textarea" cols="30" rows="4" name="description">{{$post->description}}</textarea>
                                    <br>
                                </div>
            
                                <div class="col-lg-12">
                                    <label>Address</label>
            
                                    <textarea class="form-control round_textarea" cols="30" rows="4" name="address">{{$post->address}}</textarea>
                                    <br>
                                </div>
            
                            </div>
                       
                        </div>
                        <div class="col-lg-6">
                            <div class="row">    
                                <div class="col-lg-12">
                                    <label>Phone Number</label>
                                    <input type="number" name="phoneNumber" class="form-control round_input" value="{{$post->phone_number}}">
            
                                    <br>
                                </div>                            
            
                                <div class="col-lg-6">
                                    <label>Required Donation Amount</label>
            
                                    <input type="number" name="rqAmount"  class="form-control round_input" value="{{$post->donation_amount}}">
            
                                    <br>
                                </div>
            
                                <div class="col-lg-6">
                                    <label>Required date</label>
            
                                    <input type="date" name="date" class="form-control round_input"  value="{{$post->required_date}}">
                                    <br>
                                </div>            
                                
                                <div class="col-lg-12">
            
                                    <label>Bank Name</label>
                                    <input type="text" name="bankName" class="form-control round_input"  value="{{$post->bank_name}}">
        
                                    <br>
                                </div>

                                <div class="col-lg-12">
            
                                    <label>Bank Account Number</label>
                                    <input type="text" name="acNum" class="form-control round_input" value="{{$post->bank_account_no}}">
        
                                    <br>
                                </div>

                                <div class="col-lg-12">
            
                                    <label>Branch Name</label>
                                    <input type="text" name="brName" class="form-control round_input" value="{{$post->branch_name}}">
    
                                    <br>
                                </div>

                            </div>

                            <br>
                          
                        </div>
                        <br>
                        
                    </div>
                    
                    <center>
                        <input type="submit" style="width:80%;" name="Submit" value="Update" class="btn btn-primary btn-block long_button">
                        <input type="reset" style="width:80%;" name="reset" value="Reset" class="btn btn-danger btn-block long_button">
                    </center>
                    
                </div>
        </form>
</div>
<!-- creating post end-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="{{asset('js/form.js')}}"></script>
@endsection