@extends('layouts.layout')
@section('content')
<main class="l-main">
        <!-- HOME -->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__img" style="max-width: 340px;">
                    <img src="css/images/home.svg" alt="2 hands and heart">
                </div>

                <div class="home__data">
                    <h1 class="home__title">Crowdfunding For Medical Bills</h1>
                    <p class="home__description">Sometimes you can't afford your medical bills . . . . . . <b>right???</b> <br>So we decided to make a platform for you to connect with donators directly. <b>:)</b></p>
                    <a href="/posts/create" class="button">Create a Campaign</a>
                </div>   
            </div>
        </section>

        <!-- DONATE -->
        <section class="donate section bd-container" id="donate">
            <div class="donate__container bd-grid">
                <div class="donate__data">
                    <h2 class="section-title-center">Donation Is The Best Gift <br> You Can Give</h2>
                    <p class="donate__description">Donating money is the best gift you can give to the people who need it most. <br>Give life and make a smile face on people who are unable to pay for their medical bills.</p>
                    <a href="/posts" class="button">Donate Now</a>
                </div>

                <div class="donate__img" style="max-width: 280px;">
                    <img src="css/images/donate.svg" alt="dollar sign">
                </div>
            </div>
        </section>

        <!-- CATEGORIES -->
        <section class="categories section bd-container" id="categories">
            <h2 class="section-title">Give Donations <br> For These Categories</h2>
            <div class="categories__container bd-grid">

                <div class="categories__data">
                    <img src="css/images/blood_dialysis.svg" alt="blood bag" class="categories__img">
                    <h3 class="categories__title">Blood Dialysis</h3>
                    <a href="/posts/?category=1000" class="button button-link">Donate Now</a>
                </div>

                <div class="categories__data">
                    <img src="css/images/cancer.svg" alt="" class="categories__img">
                    <h3 class="categories__title">Cancer Patients</h3>
                    <a href="/posts/?category=1001" class="button button-link">Donate Now</a>
                </div>

                <div class="categories__data">
                    <img src="css/images/heart.svg" alt="" class="categories__img">
                    <h3 class="categories__title">Heart Patients</h3>
                    <a href="/posts/?category=1002" class="button button-link">Donate Now</a>
                </div>

                <div class="categories__data">
                    <img src="css/images/kidney.svg" alt="" class="categories__img">
                    <h3 class="categories__title">Kidney Transplant</h3>
                    <a href="/posts/?category=1003" class="button button-link">Donate Now</a>
                </div>

            </div>
        </section>

        <!-- WRITE TO US / COMMENTS -->
        <section class="comments section">
            <div class="comments__container bd-container bd-grid">
                <div class="comments__content">
                    <h2 class="section-title-center comments__title">Write To Us</h2>
                    <p class="comments__description">We started this project for a university assignment. We need your valuable comments and suggestions to improve the website and to give a better service. Please send your comments and suggestions......</p>
                    
                </div>

                <div class="comments__img">
                    <form action="">
                        <div class="comments__direction">
                            <textarea rows="4" cols="50" placeholder="Your comments . . ." class="comments__input"></textarea>
                            <a href="#" class="button" style="align-self: center;" >Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection