<!doctype html>
<html lang="en">
  <head>
    <style>
    .img1 {
        float: left;
          max-width: 600px;
          max-height: 500px;
      }
      
      .img2 {
        float: right;
          max-width: 600px;
          max-height: 500px;
      }
      
      
      
      body {
        background-image: url("css/images/landing/back.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      
      .container {
        position: relative;
        width: 100%;
        max-width: 400px;
      }
      
      .container img {
        width: 100%;
        height: auto;
      }
      
      .container .btn1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #00b0ff;
        color: black;
        font-size: 16px;
        padding: 20px 50px;
        border: none;
        cursor: pointer;
        border-radius: 0px;
        text-align: center;
      }
      
      .container .btn1:hover {
        background-color:   #7CFC00;
      }
      
      /*button 2 cam*/
      .container .btn2 {
        position: ;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #00b0ff;
        color: black;
        font-size: 16px;
        padding: 20px 50px;
        border: none;
        cursor: pointer;
        border-radius: 0px;
        text-align: center;
      }
      
      .container .btn2:hover {
        background-color:   #7CFC00;
      }
      .glass12{
        background-color: rgba(255, 255, 255, .15);
        backdrop-filter: blur(5px);       
      }
      .card{
      background: #fff;
      box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
      cursor: pointer;
      }
    .card:hover{
       transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
      }
    </style>

    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  

    <title>Web Assignment</title>
  </head>
  <body>



  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #c1e0f7;">
        <a class="navbar-brand" href="#">uFund</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categery
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('login') }}">Heart</a>
                <a class="dropdown-item" href="{{ route('login') }}">Cancer</a>
                <a class="dropdown-item" href="#">Vision Problem</a>
                <a class="dropdown-item" href="#">infants</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search Patient</button>
          </form>
        </div>
      </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 <br>

  <!--caro-->
 

<div class="container">
  <img src="css/images/landing/7774.jpg" alt="vecter image" style="width:100%">
  <button class="btn1"> Donate now</button>
</div>
 
   <!--caro-->



<div class="container my-4">
  <!--Slides-->

  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="css/images/landing/eco.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Heart</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
              <a href="{{ route('Heart') }}" class="btn btn-primary">Heart</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="css/images/landing/papi.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Cancer</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a href="{{ route('Heart') }}" class="btn btn-primary">Canser</a>
          </div>
      </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="css/images/landing/eye.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Vision Problem</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      
       <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="css/images/landing/doc.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Infants</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
         </div>
 </div>
 </div>
     </div>  
  </div>


<br>
<br>
<br>
<br>
<h1><b>Who is this website for?</b></h1>
  <img src="css/images/landing/help.jpg"class="img1" alt="Smiley face"  style="float:left"><h3><i><br><br><br><br>All Sri Lankan citizens in need of financial assistance for treatment.</i></h3>

<br>
<br>
<br>
<h1><b>Can  i start a compaign?</b></h1>
  <img src="css/images/landing/dep.jpg"class="img2" alt="Smiley face"><h3><i><br><br><br><br>Of course yes just click the button and register.</i></h3>
  </div>


    <div class="fixed-bottom">Hi! Add content here</div>
</body>
</html>