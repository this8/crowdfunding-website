@extends('layouts.layout')
@section('content')

<!--========== Title ==========-->
<section class="accessory section bd-container" id="accessory">
    <h2 class="section-title">Posters</h2>

<!--========== Posters ==========-->
<div class="card-frame">
@foreach ($posts as $post)
    <div class="card-bodybg">
        <div class="col-image">
            <img class="card-bodybg-img-left" src="{{ asset('patients/' . $post->NIC_number . '/patient-profile-pic/' . $post->patient_picture) }}" alt="Profile picture">
            <h4 class="card-name">{{ $post->user->name }}</h4>
        </div>
        <div class="card-body">
            <!--=== Components ===-->
            <h6 class="card-body-title">{{ $post->category->name }}</h6>
            <table class="card-items">
            <tr>
                <td>Age:</td>
                <td>{{ $post->Age }}</td>
            </tr>
            <tr>
                <td>NIC_number:</td>
                <td>{{ $post->NIC_number }}</td>
            </tr>
            <tr>
                <td>Required date:</td>
                <td>{{ $post->required_date }}</td>
            </tr>
            <tr>
                <td>Required amount:</td>
                <td>{{ $post->donation_amount }}</td>
            </tr>
            </table>
            <!-- More detail button -->
            <div class="btn-detail">
            <button class="button-more" name="More-details">
                <a class="link-btn" href="/posts/{{$post->id}}">More Details</a></button>
            </div>
        </div>
    </div>
@endforeach
</div>
    <!-- End poster -->
</section>

@endsection
