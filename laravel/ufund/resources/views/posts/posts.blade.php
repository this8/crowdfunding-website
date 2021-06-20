<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Poster</title>
</head>
<body>


      <!-- Poster -->

      @foreach ($posts as $post)
      <div class="card-deck">

        <div class="card col-12">
          <div class="col-image">
            <img class="card-img-left img-responsive" style="width: 500px" src="patients/{{$post->NIC_number}}/patient-profile-pic/{{$post->patient_picture}}" alt="Card image cap">
            <h4 class="card-name ">{{$post->Category}}</h4>
          </div>
          <div class="card-body">
            <!-- Components -->

            {{-- this button download medical report --}}
            <a download class="btn btn-primary" href="patients/{{$post->NIC_number}}/med-document/{{$post->med_report}}">Download medical report</a>
           
            <h6 class="card-body-title">NIC number :{{$post->NIC_number}}</h6>
            <table class="card-items">
              <tr>
                <td>description :</td>
              </tr>
              <tr>
                  <td></td>
                  <td>
                      &nbsp;<textarea cols="30" rows="10">{{$post->description}}</textarea>

                  </td>
              </tr>
              <tr>
                <td>Phone number:</td>
                <td>{{$post->phone_number}}</td>
              </tr>
              <tr>
                <td>Address:</td>
                <td>{{$post->address}}</td>
              </tr>
              <tr class="table-danger">
                <td >Required amount:</td>
                <td>{{$post->donation_amount}}</td>
              </tr>
              <tr>
                <td>Required date:</td>
                <td>{{$post->required_date}}</td>
              </tr>
            </table>
            <br>
            <!-- progress bar -->
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-container w3-blue w3-round-xlarge" style="width: 50%;">50%</div>
            </div>
            <!-- More detail button -->

            <br>
              <td> <a href="post/{{$post->id}}/edit " class="btn btn-outline-success"> Edit </a>
            <td> 
            
                <form action="/post/{{$post->id}}" method="POST">
                  <br>
                    <button class="btn btn-outline-danger" onclick="return confirm('Are you sure ?');" > Delete </button>
                    @csrf
                    @method('delete')
                </form>    

            </td>

            <div class="btn-detail">
              <button class="button-more" name="More-details">
                <a class="link-" href="#">More Details</a></button>
            </div>

            
          </div>
        </div>
    </div><br><br>

      @endforeach
          
       
      <!-- End poster -->
    
      
</body>
</html>