@extends('layouts.layout')
@section('content')
<main class="l-main">
        <!-- HOME -->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__img">
                    <!-- <img src="assets/img/home.png" alt=""> -->
                </div>

                <div class="home__data">
                    <h1 class="home__title">Collect Funds For Medical Bills</h1>
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

                <div class="donate__img">
                    <!-- <img src="assets/img/donated.png" alt=""> -->
                </div>
            </div>
        </section>

        <!-- CATEGORIES -->
        <section class="categories section bd-container" id="categories">
            <h2 class="section-title">Give Donations <br> For These Categories</h2>
            <div class="categories__container bd-grid">
                <div class="categories__data">
                    <!-- <img src="assets/img/categories1.png" alt="" class="categories__img"> -->
                    <h3 class="categories__title">Blood Dialysis</h3>
                    <a href="#" class="button button-link">Donate Now</a>
                </div>

                <div class="categories__data">
                    <!-- <img src="assets/img/categories2.png" alt="" class="categories__img"> -->
                    <h3 class="categories__title">Kidney Transplantation</h3>
                    <a href="#" class="button button-link">Donate Now</a>
                </div>

                <div class="categories__data">
                    <!-- <img src="assets/img/categories3.png" alt="" class="categories__img"> -->
                    <h3 class="categories__title">Coronary Angiogram</h3>
                    <a href="#" class="button button-link">Donate Now</a>
                </div>

                <div class="categories__data">
                    <!-- <img src="assets/img/categories2.png" alt="" class="categories__img"> -->
                    <h3 class="categories__title">Bone Marrow Transplantation</h3>
                    <a href="#" class="button button-link">Donate Now</a>
                </div>

            </div>
        </section>

        <!-- WRITE TO US / COMMENTS -->
        <section class="comments section">
            <div class="comments__container bd-container bd-grid">
                <div class="comments__content">
                    <h2 class="section-title-center comments__title">Write To Us</h2>
                    <p class="comments__description">We started this project for a university assignment. We need your valuable comments and suggestions to improve the website and to give a better service. Please send your comments and suggestions......</p>
                    <form action="">
                        <div class="comments__direction">
                            <input type="text" placeholder="Your comments . . ." class="comments__input">
                            <a href="#" class="button">Submit</a>
                        </div>
                    </form>
                </div>

                <div class="comments__img">
                    <!-- <img src="assets/img/comments.png" alt=""> -->
                </div>
            </div>
        </section>
    </main>
@endsection