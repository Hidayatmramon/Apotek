<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="{{asset('#')}}assets/img/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('user/css/styles.css')}}" />

    <title>ApotekKuy</title>
</head>

<body>

<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            <img src="{{asset('user/img/logo.png')}}" alt="" />
            Apotekkuy
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="#about" class="nav__link">About Us</a>
                </li>
                <li class="nav__item">
                    <a href="#Obat" class="nav__link">menu</a>
                </li>

                <!-- <li class="nav__item">
                    <a href="#recently" class="nav__link">Recently</a>
                  </li> -->
            </ul>
        </div>

        <div class="nav__buttons">
            <!-- Dark/Light mode button -->
            <i class="ri-moon-line change-theme" id="theme-button"></i>
        </div>
            <ul class="nav__list">
        <li class="nav__item">
            <a href="{{route('logout')}}" class="nav__link">Logout</a>
        </li>
            </ul>
        </div>
    </nav>
</header>

@yield('home')

<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer__container container grid">
        <div>
            <a href="#" class="footer__logo">
                <img src="{{asset('user/img/logo.png')}}" alt="footer image" />
                Apotekkuy
            </a>
            <p class="footer__description">
                Kami lebih dari sekadar apotek,<br />
                kami adalah teman Anda dalam <br />
                perawatan kesehatan.
            </p>
        </div>

        <div class="footer__content">
            <div>
                <h3 class="footer__title">Main Menu</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#home" class="footer__link">Home</a>
                    </li>

                    <li>
                        <a href="#about" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="#Obat" class="footer__link">menu</a>
                    </li>


                </ul>
            </div>

            <!-- <div>
              <h3 class="footer__title">Information</h3>

              <ul class="footer__links">
                <li>
                  <a href="#" class="footer__link">Contact</a>
                </li>

                <li>
                  <a href="#" class="footer__link">Order & Returns</a>
                </li>

                <li>
                  <a href="#" class="footer__link">Videos</a>
                </li>

                <li>
                  <a href="#" class="footer__link">Reservation</a>
                </li>
              </ul>
            </div> -->

            <div>
                <h3 class="footer__title">Address</h3>

                <ul class="footer__links">
                    <li class="footer__information">
                        <a href="#" class="footer__link">Indonesia - Bogor<br />

                        </a>
                    </li>

                    <li class="footer__information">8AM - 12AM</li>
                </ul>
            </div>

            <div>
                <h3 class="footer__title">Social Media</h3>

                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/hidayatmramon" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://github.com/hidayatmramon" target="_blank" class="footer__social-link">
                        <i class="ri-github-fill"></i>
                    </a>
                </ul>
            </div>
        </div>
        <img src="{{asset('user/img/logo.png')}}" alt="footer image" class="footer__leaf" />

        <span class="footer__copy"> &#169; 2023 Copyright. All rights reserved </span>
    </div>
</footer>

<!--========== SCROLL UP ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
</a>
<!--=============== SCROLLREVEAL ===============-->
<script src="{{asset('user/js/scrollreveal.min.js')}}"></script>

<!--=============== MAIN JS ===============-->
<script src="{{'user/js/main.js'}}"></script>
</body>

</html>
