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

      <!-- Poster -->
        {{-- <div class=""> --}}
          <center>
          <div class="body-border">
            
              <div class="col-image" style="margin-top: 30px">
                <img class="profileImage col-md-12" style="width: 200px; height:200px;" src="{{ asset('patients/' . $post->NIC_number . '/patient-profile-pic/' . $post->patient_picture) }}" alt="Card image cap">
                <br><br>
                <h4 class="card-name display-4" style="color: red"><b> {{$post->user->name}}</b> </h4>
              </div>
            
              <br><br>
              <p style="">
                {{$post->description}}
              </p>

              <br>
              <div class="row">

                <div class="col-xl-3">

                </div>

                <div class="col-xl-3">
                  <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary" style="margin-bottom: 30px">edit</a>

                </div>

                <div class="col-xl-3">
                  <form action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger" onclick="return confirm('Are you sure ?');" > Delete </button>
                </form> 
                </div>

                <div class="col-lg-3">

                </div>

              </div>

              <br>
              <div class="row">
                  <div class="col-xl-4">
                    <h1>Patient Details</h1>
                    <table border="1px">

                      <tr> <td>NIC number </td> <td>{{$post->NIC_number}}  </td> </tr>
                      <tr> <td> Age</td> <td> {{$post->Age}} </td> </tr>
                      <tr> <td> Phone Number</td>  <td>{{$post->phone_number}} </td> </tr>
                      <tr> <td> Address </td> <td> {{$post->address}} </td> </tr>

                    </table>
                  </div>

                  <div class="col-xl-4">
                    <h1>Required Donation Details</h1>
                    <table border="1px"> 
                      <tr> <td> Categoty</td> <td> {{$post->category->name}}</td> </tr>
                      <tr> <td> Donation Amount</td> <td> {{$post->donation_amount}}</td> </tr>
                      <tr> <td> Required Date</td> <td> &nbsp; Before in {{$post->required_date}},<br> &nbsp; I need this donation <br> &nbsp; for medical treatment.</td> </tr>
                    </table>
                    <br>
                    <a download class="btn btn-primary" href="patients/{{$post->NIC_number}}/med-document/{{$post->med_report}}">Download medical report</a>
                  </div>

                  <div class="col-xl-4">
                    <h1>Patient's Bank Details</h1>
                    <table border="1px">
                      <tr> <td>Bank Name </td> <td> {{$post->bank_name}}</td> </tr>
                      <tr> <td> Bank Account Number </td> <td> {{$post->bank_account_no}}</td> </tr>
                      <tr> <td>Branch Name </td> <td> {{$post->branch_name}}</td> </tr>
                    </table>
                  </div>

              </div>
         
    
          

        </center>
            
    {{-- </div> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         
    @endsection