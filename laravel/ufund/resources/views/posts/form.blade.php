<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>create post</title>

</head>

<body>

    @include('navbar')

<!-- creating post -->

<div class="container">
    <div class="row">
        <div class="col-lg-3">

        </div>

        <div class="col-lg-6">
            <div id="ui">
                <form class="form-group text-center" method="POST" action="/post" enctype="multipart/form-data">
                @csrf
                <center>
                    <h1>Creating Posts</h1>
                </center>

                <div class="row">
                    <?php $catogories=["Heart","Cancer","Vision Problem","Infants","Something else here"] ?>

                    <div class="col-lg-12">
                        <label> Category </label>
                        <select class="form-control" name="category">
                            
                            <option value="">Category...</option>
                            @foreach ($catogories as $catogory)

                                <option value="{{$catogory}}">{{$catogory}}</option>

                            @endforeach

                        </select>
                    </div>

                    <br> <br>
                    {{-- <div class="col-lg-6">
                      <br> --}}
                    {{-- <label>Patient First Name</label>

                    <input type="text" name="fname" class="form-control round_input" placeholder="Enter your first name">
                  </div>

                  <div class="col-lg-6">
                    <br>
                    <label>Patient Last Name</label>

                    <input type="text" name="lname" class="form-control round_input" placeholder="Enter your last name">
                  </div> --}}

                    <div class="col-lg-12">
                        <br>

                        <div class="alert alert-danger" role="alert">
                            <a  class="alert-link">If patient is less than 16 years old,<br> Enter parent's NIC number</a>.
                        </div>
                        <label>Enter Your NIC number</label>
                        <input type="text" name="nic" class="form-control round_input" placeholder="Enter your NIC number.">
                    </div>

                    <div class="col-lg-12">
                        <br>
                        <label>Description About patient</label>

                        <textarea class="form-control round_textarea" cols="30" rows="4" name="description"></textarea>
                        <br>
                    </div>

                    <div class="col-lg-12">
                        <label>Phone number</label>
                        <input type="number" name="phoneNumber" class="form-control round_input" placeholder="Enter your phone number..">

                        <br>
                    </div>

                    <div class="col-lg-12">
                        <label>Address</label>

                        <textarea class="form-control round_textarea" cols="30" rows="4" name="address"></textarea>
                        <br>
                    </div>

                    {{-- <div class="col-lg-12">

                      <label>E-mail</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter your email..">

                      <br>
                    </div> --}}

                    <div class="col-lg-6">
                        <label>Required Donation Amount</label>

                        <input type="number" name="rqAmount"  class="form-control round_input" placeholder="Enter donation amount..">

                        <br>
                    </div>

                    <div class="col-lg-6">
                        <label>Required date</label>

                        <input type="date" name="date" class="form-control round_input" placeholder="Enter required date..">
                        <br>
                    </div>


                    <div class="inputUpload">
                        <label for="file-ip" class="fileLabel">upload patient picture</label>

                        <input type="file" name="patient_pic" class="uploadFile" accept="image/*">

                        <br><br>
                        @csrf
                        <label for="file-ip"  class="fileLabel">upload medical report</label>

                        <input type="file" name="med_repo" class="uploadFile">

                        <br><br>
                    </div>

                </div>
                <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block long_button">
                <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-block long_button">

                </form>
            </div>
        </div>

        <div class="col-lg-3">

        </div>
    </div>
</div>
<!-- creating post end-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
