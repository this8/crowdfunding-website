<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/creatingPost.css') }}">
  <title>Web Assignment</title>

</head>

<body>

  {{-- including navbar --}}
  @include('navbar')


  <!-- creating post -->

  <div class="container">
    <div class="row">
      <div class="col-lg-3">

      </div>

      <div class="col-lg-6">
        <div id="ui">
          <form class="form-group text-center" method="POST" action="/posts" enctype="multipart/form-data"
          @csrf
            <center>
              <h1>Creating Posts</h1>
            </center>
           
            <div class="row">

              <br> <br>
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
                <label>Description About patient</label>

                <textarea class="form-control" cols="30" rows="4" name="description"></textarea>
                <br>
              </div>

              <div class="col-lg-12">
                <br>
                <label>Phone number</label>
                @csrf
                <input type="number" name="phoneNumber" class="form-control" placeholder="Enter your phone number..">

                <br>
              </div>

              <div class="col-lg-12">
                <label>Address</label>

                <textarea class="form-control" cols="30" rows="4" name="address"></textarea>
                <br>
              </div>

              {{-- <div class="col-lg-12">

                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email..">

                <br>
              </div> --}}

              <div class="col-lg-6">
                <label>Required Donation Amount</label>

                <input type="number" name="rqAmount"  class="form-control" placeholder="Enter donation amount..">

                <br>
              </div>

              <div class="col-lg-6">
                <label>Required date</label>

                <input type="date" name="date" class="form-control" placeholder="Enter required date..">
                <br>
              </div>


              <div class="inputUpload">
                <label for="file-ip" class="fileLabel">upload patient picture</label>
                
                <input type="file" name="patient_pic" class="uploadFile" accept="image/*">

                <br><br>

                <label for="file-ip"  class="fileLabel">upload medical reports</label>

                <input type="file" name="med_repo" class="uploadFile">

              </div>

            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-block">
            <input type="reset" name="reset" value="reset" class="btn btn-primary btn-block">
          
          </form>
        </div>
      </div>

      <div class="col-lg-3">

      </div>
    </div>
  </div>
  <!-- creating post end-->

</body>

</html>