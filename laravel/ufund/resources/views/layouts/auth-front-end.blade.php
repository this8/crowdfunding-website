<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/auth.css')}}">

    <title>Document</title>
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4">
                        <br><br>
                        <h1 class="display-3"> <b> uFund</b></h1>
                    </div>
                    <div class="col-lg-8">
                        <br><br>
                        <img src="css/images/ufund_logo.svg" width="90px" alt="uFund logo" style="margin-top: 10px">

                    </div>
                </div>
                
                <p> Crowdfunding website for medical bills.</p> 
            </div>

            <div class="col-lg-6">
                @yield('content')
            </div>
        </div>
        
    </div>
    
</body>
</html>