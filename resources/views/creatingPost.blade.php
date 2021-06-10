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


  <!-- creating post -->

  <div class="container">
    <div class="row">
      <div class="col-lg-3">

      </div>

      <div class="col-lg-6">
        <div id="ui">
          <form class="form-group text-center" name="fmCreatingPost" action="post">

            <h1 class="text-center">Creating Post</h1>
            <div class="row">
              <div class="col-lg-12">
                <label> Category </label>
                <select class="form-control">
                  <option>Category...</option>
                  <option>Heart</option>
                  <option>Cancer</option>
                  <option>Vision Problem</option>
                  <option>Infants</option>
                  <option>Something else here</option>
                </select>
              </div>

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
                <label>Phone number</label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="Enter your phone number..">

                <br>
              </div>

              <div class="col-lg-12">
                <label>Address</label>
                <textarea class="form-control" cols="30" rows="4" name="address"></textarea>
                <br>
              </div>

              <div class="col-lg-12">

                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email..">

                <br>
              </div>

              <div class="col-lg-6">
                <label>Required Donation Amount</label>
                <input type="text" name="rqAmount" value="RS " class="form-control" placeholder="Enter donation amount..">

                <br>
              </div>

              <div class="col-lg-6">
                <label>Required date</label>
                <input type="date" name="date" class="form-control" placeholder="Enter required date..">
                <br>
              </div>


              <div class="inputUpload">
                <label for="file-ip" class="fileLabel">upload patient picture</label>

                <input type="file" class="uploadFile" accept="image/*">

                <br><br>

                <label for="file-ip" class="fileLabel">upload medical reports</label>

                <input type="file" class="uploadFile">

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

</body>

</html>