<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>SicilyLines</title>
</head>
<body>
    <div class="loader">
        <img src="{{ asset('images/image1.jpg') }}">
        <img src="{{ asset('images/image2.jpg') }}">
        <img src="{{ asset('images/image3.jpg') }}">
        <img src="{{ asset('images/image4.jpg') }}">
        <img src="{{ asset('images/image5.jpg') }}">
        <img src="{{ asset('images/image6.jpg') }}">
        <img src="{{ asset('images/image7.jpg') }}">
        <img src="{{ asset('images/image8.jpg') }}">
        <img src="{{ asset('images/image9.jpg') }}">
        <img src="{{ asset('images/image10.jpg') }}">
    </div>

    <section class="hero">
        <nav>
            <ul>

            <li class="logo">Sicilylines</li>
            <a href="{{ url('/login') }}"><li>
                <button>
                    <p class="btn-nav-relative">Connexion</p>
                    <div class="btn-nav-absolute">
                        <p>Connexion</p>
                    </div>
                </button>
            </li></a>
            
            </ul>
        </nav>

        <div class="container">
            <div class="slider-container">
                <div class="controls">
                    <div class="control"></div>
                    <div class="control"></div>
                    <div class="control"></div>
                    <div class="control"></div>
                </div>
                <div class="slides">
                    <div class="slide">
                        <img src="{{ asset('images/image1.jpg') }}">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('images/image2.jpg') }}">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('images/image3.jpg') }}">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('images/image4.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>