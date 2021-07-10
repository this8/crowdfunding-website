<!doctype html>
<html lang="en">
<head>
{{--    <style>--}}
{{--        .img1 {--}}
{{--            float: left;--}}
{{--            max-width: 600px;--}}
{{--            max-height: 500px;--}}
{{--        }--}}

{{--        .img2 {--}}
{{--            float: right;--}}
{{--            max-width: 600px;--}}
{{--            max-height: 500px;--}}
{{--        }--}}



{{--        body {--}}
{{--            background-image: url("css/images/landing/back.jpg");--}}
{{--            background-repeat: no-repeat;--}}
{{--            background-attachment: fixed;--}}
{{--            background-size: cover;--}}
{{--        }--}}

{{--        .container {--}}
{{--            position: relative;--}}
{{--            width: 100%;--}}
{{--            max-width: 400px;--}}
{{--        }--}}

{{--        .container img {--}}
{{--            width: 100%;--}}
{{--            height: auto;--}}
{{--        }--}}

{{--        .container .btn1 {--}}
{{--            position: absolute;--}}
{{--            top: 50%;--}}
{{--            left: 50%;--}}
{{--            transform: translate(-50%, -50%);--}}
{{--            -ms-transform: translate(-50%, -50%);--}}
{{--            background-color: #00b0ff;--}}
{{--            color: black;--}}
{{--            font-size: 16px;--}}
{{--            padding: 20px 50px;--}}
{{--            border: none;--}}
{{--            cursor: pointer;--}}
{{--            border-radius: 0px;--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        .container .btn1:hover {--}}
{{--            background-color:   #7CFC00;--}}
{{--        }--}}

{{--        /*button 2 cam*/--}}
{{--        .container .btn2 {--}}
{{--            position: ;--}}
{{--            top: 50%;--}}
{{--            left: 50%;--}}
{{--            transform: translate(-50%, -50%);--}}
{{--            -ms-transform: translate(-50%, -50%);--}}
{{--            background-color: #00b0ff;--}}
{{--            color: black;--}}
{{--            font-size: 16px;--}}
{{--            padding: 20px 50px;--}}
{{--            border: none;--}}
{{--            cursor: pointer;--}}
{{--            border-radius: 0px;--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        .container .btn2:hover {--}}
{{--            background-color:   #7CFC00;--}}
{{--        }--}}
{{--        .glass12{--}}
{{--            background-color: rgba(255, 255, 255, .15);--}}
{{--            backdrop-filter: blur(5px);--}}
{{--        }--}}
{{--        .card{--}}
{{--            background: #fff;--}}
{{--            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);--}}
{{--            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);--}}
{{--            cursor: pointer;--}}
{{--        }--}}
{{--        .card:hover{--}}
{{--            transform: scale(1.05);--}}
{{--            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);--}}
{{--        }--}}
{{--    </style>--}}



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Web Assignment</title>
</head>
<body>
<!-- Navbar -->
<nav
    aria-label="Navbar"
    class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 fixed-top rounded-bottom">
    <div class="container">
        <a
            aria-current="page"
            class="navbar-brand"
            href="{{route('home')}}">
            <img
                alt="uFund logo"
                class="d-inline-block align-top"
                src="css/images/newlogo.png"
                width="50">
            uFund
        </a>
        <button
            aria-controls="navbarLanding"
            aria-expanded="false"
            aria-label="Toggle navigation"
            class="navbar-toggler"
            data-bs-target="#navbarLanding"
            data-bs-toggle="collapse"
            type="button">
            <span
                class="navbar-toggler-icon">

            </span>
        </button>
        <div
            class="collapse navbar-collapse"
            id="navbarLanding">
            <ul
                class="navbar-nav">
                <li
                    class="nav-item mx-1">
                    <a
                        class="nav-link"
                        href="{{route('home')}}">
                        Home
                    </a>
                </li>
                <li
                    class="nav-item dropdown mx-1">
                    <a
                        aria-expanded="false"
                        class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown"
                        id="navbarDropdown"
                        role="button">
                        Category
                    </a>
                    <ul
                        aria-labelledby="navbarDropdown"
                        class="dropdown-menu">
                        <li>
                            <a
                                class="dropdown-item"
                                href="/posts/?category=1000">
                                Blood Dialysis
                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="/posts/?category=1001">
                                Kidney transplantation
                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="/posts/?category=1002">
                                Cancer
                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="/posts/?category=1003">
                                Coronary Angiogram / PCI
                            </a>
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="/posts/?category=1004">
                                Bone marrow transplantation
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item mx-1">
                    <a
                        aria-disabled="true"
                        class="nav-link"
                        href="#"
                        tabindex="-1">
                        About-Us
                    </a>
                </li>
            </ul>
            <a
                class="btn btn-danger me-auto my-1 mx-1 shadow rounded"
                href="posts/create"
                role="button">
                Start a Campaign
            </a>
            <ul
                class="navbar-nav">
                <li
                    class="nav-item mx-1 my-1 active">
                    <a
                        class="btn btn-primary active"
                        href="{{ route('login') }}"
                        role="button">
                        Login
                    </a>
                </li>
                <li
                    class="nav-item mx-1 my-1">
                    <a
                        class="btn btn-primary"
                        href="{{ route('register') }}"
                        role="button">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


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
                        <a href="#" class="btn btn-primary">Heart</a>
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
                        <a href="#" class="btn btn-primary">Canser</a>
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

<!-- Footer -->
text-center text-lg-start bg-light text-muted
<footer class="bg-dark text-muted">

    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-3 pt-3">

            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-capitalize fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>uFund
                    </h6>
                    <p>
                        uFund is a website platform for Crowdfunding medical bills.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="https://sdgs.un.org/goals" class="text-reset">SDG 17</a>
                    </p>
                    <p>
                        <a href="https://en.wikipedia.org/wiki/Crowdfunding" class="text-reset">What is crowdfunding</a>
                    </p>
                    <p>
                        <a href="https://github.com/this8/crowdfunding-website" class="text-reset">Github</a>
                    </p>
                    <p>
                        <a href="https://www.nsbm.ac.lk/" class="text-reset">NSBM</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="me-3"></i>NSBM Green University,<br><i class="me-3"></i>Mahenwaththa,<br><i class="me-3"></i>Pitipana, Homagama,<br><i class="me-3"></i>Sri Lanka</p>
                    <p>
                        <i class="me-3"></i>
                        info@ufund.com
                    </p>
                    <p><i class="me-3"></i>+94 702 527 844</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://csilluminati.dev/">CSilluminati.dev</a>
    </div>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
