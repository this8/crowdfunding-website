<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Poster</title>
</head>
<body>

@include('navbar')

    <div class="card-deck">
@foreach ($posts as $post)

    @if($post->Category=="Heart")
      <!-- Poster -->
        <div class="card">
          <div class="col-image">
            <img class="card-img-left" src="OIP.jpg" alt="Card image cap">
            <h4 class="card-name">Card Name</h4>
          </div>
          <div class="card-body">
            <!-- Components -->
            <h6 class="card-body-title">Card title</h6>
            <table class="card-items">
              <tr>
                <td>Age:</td>
                <td>........</td>
              </tr>
              <tr>
                <td>NIC_number:</td>
                <td>{{$post->NIC_number}}</td>
              </tr>
              <tr>
                <td>Required date:</td>
                <td>{{$post->required_date}}</td>
              </tr>
              <tr>
                <td>Required amount:</td>
                <td>{{$post->donation_amount}}</td>
              </tr>
            </table>
            <br>
            <!-- progress bar -->
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-container w3-blue w3-round-xlarge" style="width: 50%;">50%</div>
            </div>
            <!-- More detail button -->
            <div class="btn-detail">
              <button class="button-more" name="More-details">
                <a class="link-" href="#">More Details</a></button>
            </div>
            
          </div>
        </div>

    @endif

  @endforeach
      <!-- End poster -->

      <!-- Poster -->
      <div class="card">
        <div class="col-image">
          <img class="card-img-left" src="OIP.jpg" alt="Card image cap">
          <h4 class="card-name">Card Name</h4>
        </div>
        <div class="card-body">
          <!-- Components -->
          <h6 class="card-body-title">Card title</h6>
          <table class="card-items">
            <tr>
              <td>Age:</td>
              <td>........</td>
            </tr>
            <tr>
              <td>NIC:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required date:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required amount:</td>
              <td>..........</td>
            </tr>
          </table>
          <br>
          <!-- progress bar -->
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-container w3-blue w3-round-xlarge" style="width:25%;">25%</div>
          </div>
          <!-- More detail button -->
          <div class="btn-detail">
            <button class="button-more" name="More-details">
              <a class="link-" href="#">More Details</a></button>
          </div>
          
        </div>
      </div>
    <!-- End poster -->

      <!-- Poster -->
      <div class="card">
        <div class="col-image">
          <img class="card-img-left" src="OIP.jpg" alt="Card image cap">
          <h4 class="card-name">Card Name</h4>
        </div>
        <div class="card-body">
          <!-- Components -->
          <h6 class="card-body-title">Card title</h6>
          <table class="card-items">
            <tr>
              <td>Age:</td>
              <td>........</td>
            </tr>
            <tr>
              <td>NIC:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required date:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required amount:</td>
              <td>..........</td>
            </tr>
          </table>
          <br>
          <!-- progress bar -->
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-container w3-blue w3-round-xlarge" style="width:25%;">25%</div>
          </div>
          <!-- More detail button -->
          <div class="btn-detail">
            <button class="button-more" name="More-details">
              <a class="link-" href="#">More Details</a></button>
          </div>
          
        </div>
      </div>
    <!-- End poster -->


      <!-- Poster -->
      <div class="card">
        <div class="col-image">
          <img class="card-img-left" src="OIP.jpg" alt="Card image cap">
          <h4 class="card-name">Card Name</h4>
        </div>
        <div class="card-body">
          <!-- Components -->
          <h6 class="card-body-title">Card title</h6>
          <table class="card-items">
            <tr>
              <td>Age:</td>
              <td>........</td>
            </tr>
            <tr>
              <td>Required date:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required amount:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required amount:</td>
              <td>..........</td>
            </tr>
          </table>
          <br>
          <!-- progress bar -->
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-container w3-blue w3-round-xlarge" style="width:25%;">25%</div>
          </div>
          <!-- More detail button -->
          <div class="btn-detail">
            <button class="button-more" name="More-details">
              <a class="link-" href="#">More Details</a></button>
          </div>
          
        </div>
      </div>
    <!-- End poster -->

      <!-- Poster -->
      <div class="card">
        <div class="col-image">
          <img class="card-img-left" src="OIP.jpg" alt="Card image cap">
          <h4 class="card-name">Card Name</h4>
        </div>
        <div class="card-body">
          <!-- Components -->
          <h6 class="card-body-title">Card title</h6>
          <table class="card-items">
            <tr>
              <td>Age:</td>
              <td>........</td>
            </tr>
            <tr>
              <td>Required date:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required amount:</td>
              <td>..........</td>
            </tr>
            <tr>
              <td>Required amount:</td>
              <td>..........</td>
            </tr>
          </table>
          <br>
          <!-- progress bar -->
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-container w3-blue w3-round-xlarge" style="width:25%;">25%</div>
          </div>
          <!-- More detail button -->
          <div class="btn-detail">
            <button class="button-more" name="More-details">
              <a class="link-" href="#">More Details</a></button>
          </div>
          
        </div>
      </div>
    <!-- End poster -->

      </div>
</body>
</html>