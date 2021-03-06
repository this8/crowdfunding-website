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

<!-- creating post -->

<div class="container">
        <form class="form-group text-center" name="form"  method="POST" action="/posts" enctype="multipart/form-data">
            
            @csrf
                <div id="ui">
                    <center>
                        <h1 style="color: red">Create a Campaign</h1>
                    </center>
                    <div class="row">
                        <div class="col-lg-6">
        
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Category</label>
                                    <select class="form-control round_input" name="categoryId">
                                        <option value="1">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @endforeach
            
                                    </select>
                                    <p style="color: red; text-align: left;">{{$errors->first('category_id')}}</p>
                                </div>
            
                                <br> <br>
            
                                <div class="col-lg-12">
            
                                        <label>Age</label>
                                        <input type="text" name="age" class="form-control round_input" placeholder="Enter your Age . . ." required>

                                        <p style="color: red; text-align: left;">{{$errors->first('Age')}}</p>
                                        
                                        <br>
                                </div>
            
                                <div class="col-lg-12">
                                    <br>
            
                                    <div class="alert alert-danger" style="border-radius: 20px; " role="alert">
                                        <a  class="alert-link">If the patient is less than 16 years old,<br> Enter parent's NIC number</a>.
                                    </div>
                                    <label>Enter your NIC number</label>
                                    <input type="text" name="nic" class="form-control round_input" placeholder="Enter your NIC number . . ." required>

                                    <p style="color: red; text-align: left;">{{$errors->first('NIC_number')}}</p>

                                </div>
            
                                <div class="col-lg-12">
                                    <br>
                                    <label>Description about the patient</label>
            
                                    <textarea class="form-control round_textarea" cols="30" rows="4" name="description" required></textarea>
                                    
                                    <p style="color: red; text-align: left;">{{$errors->first('description')}}</p>

                                    <br>
                                </div>
            
                                <div class="col-lg-12">
                                    <label>Address</label>
            
                                    <textarea class="form-control round_textarea" cols="30" rows="4" name="address" required></textarea>

                                    <p style="color: red; text-align: left;">{{$errors->first('address')}}</p>

                                    <br>
                                </div>
            
                            </div>
                       
                        </div>
                        <div class="col-lg-6">
                            <div class="row">    
                                <div class="col-lg-12">
                                    <label>Phone number</label>
                                    <input type="text" name="phoneNumber" class="form-control round_input" placeholder="Enter your phone number . . ." required>

                                    <p style="color: red; text-align: left;">{{$errors->first('phone_number')}}</p>
            
                                    <br>
                                </div>                            
            
                                <div class="col-lg-6">
                                    <label>Required donation amount</label>
            
                                    <input type="text" name="rqAmount"  class="form-control round_input" placeholder="Enter required amount . . ." required>

                                    <p style="color: red; text-align: left;">{{$errors->first('donation_amount')}}</p>
            
                                    <br>
                                </div>
            
                                <div class="col-lg-6">
                                    <label>Required date</label>
            
                                    <input type="date" name="date" class="form-control round_input" required>

                                    <p style="color: red; text-align: left;">{{$errors->first('required_date')}}</p>

                                    <br>
                                </div>            
                                
                                <div class="col-lg-12">
            
                                    <label>Bank name</label>
                                    <input type="text" name="bankName" class="form-control round_input" placeholder="Enter your bank name . . ." required>

                                    <p style="color: red; text-align: left;">{{$errors->first('bank_name')}}</p>
        
                                    <br>
                                </div>

                                <div class="col-lg-12">
            
                                    <label>Bank account number</label>
                                    <input type="text" name="acNum" class="form-control round_input" placeholder="Enter your bank account number . . ." required>

                                    <p style="color: red; text-align: left;">{{$errors->first('bank_account_no')}}</p>
        
                                    <br>
                                </div>

                                <div class="col-lg-12">
            
                                    <label>Branch name</label>
                                    <input type="text" name="brName" class="form-control round_input" placeholder="Enter your branch name of the bank . . ." required>

                                    <p style="color: red; text-align: left;">{{$errors->first('branch_name')}}</p>
    
                                    <br> <br><br>
                                </div>

                                <div class="col-lg-12">
                                    <label>Upload</label>
                                </div>

                                {{-- profile pic button--}}
                                <div class="col-lg-6">
                                    <input type="file" name="patient_pic" id="picFile" hidden="hidden" accept="image/*" required>
                                    <input type="button" class="btn filebtn"  id="patientPic" value="Upload patient picture">
                                </div>

                                   {{-- profile pic name --}}
                                   <div class="col-lg-6">
                                    
                                    <span id="picName" style="color: red">
                                        No file selected yet
                                    </span>

                                    <p style="color: red; text-align: left;">{{$errors->first('patient_picture')}}</p>
            
                                </div>
            
                                {{-- report button --}}
                                <div class="col-lg-6">
                                    <br>
                                    <input type="file" id="repoFile" 
                                    name="med_repo" hidden="hidden" required>
                                    <input type="button" class="btn filebtn" id="medRepo" value="Upload medical report">
            
                                </div>
            
                                {{-- medical report name --}}
                                <div class="col-lg-6">
                                    <br>
                                    <span id="repoName" style="color: red">
                                        No file selected yet
                                    </span>

                                    <p style="color: red; text-align: left;">{{$errors->first('med_report')}}</p>
            
                                </div>

                            </div>

                            <br>
                          
                        </div>
                        <br>
                        
                    </div>
                    
                    <center>
                        <input type="submit" style="width:80%;" name="Submit" value="Submit" class="btn btn-primary btn-block long_button" onclick="validate()">
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