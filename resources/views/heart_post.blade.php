@extends('layouts.post')

@section('content')

  <!-- creating post -->

  <div class="container">
    <div class="row">
      <div class="col-lg-3">

      </div>

      <div class="col-lg-6">
        <div id="ui">
          <form class="form-group text-center" name="fmCreatingPost" action="{{route('heart.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <h1 class="text-center">Creating Post</h1>
            <div class="row">
              
              <div class="col-lg-6">
                <br>
                <label>Patient First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="Enter your first name">
              </div>

              <div class="col-lg-6">
                <br>
                <label>Patient Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="Enter your last name">
              </div>

              <div class="col-lg-12">
                <br>
                <label>Phone number</label>
                <input type="text" name="PhoneNumber" class="form-control" placeholder="Enter your phone number..">

                <br>
              </div>

              <div class="col-lg-12">
                <label>Address</label>
                <textarea class="form-control" cols="30" rows="4" name="address"></textarea>
                <br>
              </div>

              <div class="col-lg-12">
                <label>Short Description</label>
                <textarea class="form-control" cols="30" rows="4" name="s_description"></textarea>
                <br>
              </div>

              

              <div class="col-lg-6">
                <label>Required Donation Amount</label>
                <input type="text" name="rqAmount" value="RS " class="form-control" placeholder="Enter donation amount..">

                <br>
              </div>

              <div class="col-lg-6">
                <label>Required date</label>
                <input type="date" name="rqDate" class="form-control" placeholder="Enter required date..">
                <br>
              </div>


              <div class="inputUpload">
                <label for="file-ip"  class="fileLabel">upload patient picture</label>

                <input type="file" name="profile" class="uploadFile" accept="image/*">

                <br><br>

                <label for="file-ip"  class="fileLabel">upload medical reports</label>

                <input type="file" name="report" class="uploadFile">

              </div>

            </div>
            <input type="button" name="submit" value="submit" class="btn btn-primary btn-block" onclick="validate()">
          </form>
        </div>
      </div>

      <div class="col-lg-3">

      </div>
    </div>
  </div>
  <!-- creating post end-->

  @endsection