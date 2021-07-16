<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   
    @yield('bs4')
    <title>uFund|CrowdFunding</title>
</head>
<body>
    <!-- SCROLL TOP -->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
    </a>
    
    <!-- HEADER -->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <div class="ufund__logo"><img src="/css/images/logo.png" alt="ufund logo"></div>
            <a href="#" class="nav__logo">uFund</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="{{route('home')}}" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="/home#donate" class="nav__link">Donate</a></li>
                    <li class="nav__item"><a href="/home#categories" class="nav__link">Categories</a></li>
                    <li class="nav__item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav__link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();this.closest('form').submit();">
                            {{ __('Logout') }}
                            </a>
                        </form>
                    </li>
                    <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </nav>
    </header>

    @yield('content')

     <!-- FOOTER -->
     <footer class="footer section">
        <div class="footer__container bd-container bd-grid">
            <div class="footer__content">
                <h3 class="footer__title">
                    <a href="#" class="footer__logo">uFund</a>
                </h3>
                <p class="footer__description">Crowdfunding Platform For <br> Medical Bills</p>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Useful Links</h3>
                <ul>
                    <li><a href="https://en.wikipedia.org/wiki/Crowdfunding" target="_blank" rel="noopener noreferrer" class="footer__link">What is Crowdfunding?</a></li>
                    <li><a href="https://sdgs.un.org/goals" target="_blank" rel="noopener noreferrer" class="footer__link">SDG 17</a></li>
                    <li><a href="https://github.com/this8/crowdfunding-website" target="_blank" rel="noopener noreferrer" class="footer__link">Github</a></li>
                    <li><a href="https://www.nsbm.ac.lk/" target="_blank" rel="noopener noreferrer" class="footer__link">NSBM</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Company</h3>
                <ul>
                    <li><a href="#" class="footer__link">About us</a></li>
                    <li><a href="#" class="footer__link">Contact us</a></li>
                    <li><a href="#" class="footer__link">Our mision</a></li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Social</h3>
                <a href="https://www.facebook.com/UFund-101442058892639" target="_blank" rel="noopener noreferrer" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="footer__social"><i class='bx bxl-twitter'></i></a>
                <a href="#" target="_blank" rel="noopener noreferrer" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>

        <p class="footer__copy">&#169; 2021 CSilluminati. All rights reserved</p>
    </footer>

    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>