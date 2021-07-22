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
          <center>
          <div class="body-border">
            
              <div style="margin-top: 30px">
                <img class="profileImage col-md-12"  src="{{ asset('patients/' . $post->NIC_number . '/patient-profile-pic/' . $post->patient_picture) }}" alt="Card image cap">
                <br><br>
                
              </div>
              <h4 class="card-name display-4" style="color: red"><b> {{$post->user->name}}</b> </h4>
            
              <br><br>
              <p 
              style="background-color: white;
              color:#5b5757; width:60%; 
              min-height:200px; 
              border:solid 2px red;  
              text-align:left;
              border-radius: 40px;
              padding: 15px;">
                {{$post->description}}
              </p>

              <br>
              <div class="tab d-flex justify-content-center">
                  <button class="tablinks" onclick="openDetalis(event, 'patient')">Patient Details</button>
                  <button class="tablinks" onclick="openDetalis(event, 'donation')">Donation Details</button>
                  <button class="tablinks" onclick="openDetalis(event, 'bank')">Patient's Bank Details</button>
              </div>

              <div id="patient" class="tabView">
                <h1>Patient Details</h1>
                    <table border="1px" class="show-table">

                      <tr> <td>NIC number </td> <td>{{$post->NIC_number}}  </td> </tr>
                      <tr> <td> Age</td> <td> {{$post->Age}} </td> </tr>
                      <tr> <td> Phone Number</td>  <td>{{$post->phone_number}} </td> </tr>
                      <tr> <td> Address </td> <td> {{$post->address}} </td> </tr>

                    </table>
              </div>

              <div id="donation" class="tabView">
                <h1>Required Donation Details</h1>
                <table border="1px"> 
                  <tr> <td> Categoty</td> <td> {{$post->category->name}}</td> </tr>
                  <tr> <td> Donation Amount</td> <td> {{$post->donation_amount}}</td> </tr>
                  <tr> <td> Required Date</td> <td> &nbsp; Before in {{$post->required_date}},<br> &nbsp; I need this donation <br> &nbsp; for medical treatment.</td> </tr>
                </table>
              </div>

              <div id="bank" class="tabView">
                <h1>Patient's Bank Details</h1>
                    <table border="1px">
                      <tr> <td>Bank Name </td> <td> {{$post->bank_name}}</td> </tr>
                      <tr> <td> Bank Account Number </td> <td> {{$post->bank_account_no}}</td> </tr>
                      <tr> <td>Branch Name </td> <td> {{$post->branch_name}}</td> </tr>
                    </table>
              </div>

              <br>     
    
          

        </center>
      
    {{-- for tabs --}}
    <script src={{asset('js/show.js')}}></script>          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         
    @endsection