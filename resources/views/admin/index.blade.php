<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSS -->
    <style>
        section {
            padding-top: 100px;
            padding-bottom: 50px;
        }

        /* Hero */
        .hero-box .box p {
            width: 500px;
        }

        .hero-box .box img {
            width: 400px;
        }

        .hero-box .box:nth-child(1) {
            --animate-delay: 0.5s;
        }

        @media (max-width: 992px) {
            .hero-box .box p {
                font-size: 14px;
                width: 300px;
            }

            .hero-box .box img {
                width: 300px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding-top: 50px;
            }

            .hero-box {
                text-align: center;
            }

            .hero-box .box p {
                width: 100%;
            }
        }

        /* Hero */

        /* About */
        .about-box img {
            width: 400px;
        }

        @media (max-width: 475px) {
            .about-box img {
                width: 300px;
            }
        }

        /* About */

        /* Services */
        .services-box .service i {
            font-size: 30px;
        }

        /* Services */

        /* FAQ */
        .faq-box .accordion-button::after {
            background-color: white;
            border-radius: 100%;
        }

        /* FAQ */

        /* Footer */
        .footer {
            margin-top: 100px;
            padding-bottom: 20px;
        }

        .footer-box .row .col:nth-child(2) a {
            opacity: 75%;
        }

        .footer-box .row .col:nth-child(2) a:hover {
            opacity: 100%;
        }

        .copyright {
            margin-top: 100px;
        }

        /* Footer */
    </style>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Indah Cargo Condongcatur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body id="home">
    <h1 style="text-align: center;"></h1>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 15px; padding: 50px;">
        <div style="background-color: #fff; border: 1px solid rgba(0,0,0,0.1); box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 1rem; overflow: hidden;">
            <img src="{{ asset('assets/images/logologo.jpeg') }}" style="width: 100%; height: 200px; object-fit: cover;" alt="">
            <div style="padding: 1.25rem;">
                <h5 style="font-weight: bold; margin-bottom: 0.5rem; color: #007bff;">Hero</h5>
                <p style="font-size: 1rem; margin-bottom: 1rem; color: #555;">Kelola Hero</p>
                <a href="{{route('hero')}}" style="background-color: #007bff; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; text-decoration: none; display: inline-block;">Detail</a>
            </div>
        </div>


        <div style="background-color: #fff; border: 1px solid rgba(0,0,0,0.1); box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 1rem; overflow: hidden;">
            <img src="{{ asset('assets/images/about.png') }}" style="width: 100%; height: 200px; object-fit: cover;" alt="">
            <div style="padding: 1.25rem;">
                <h5 style="font-weight: bold; margin-bottom: 0.5rem; color: #007bff;">About</h5>
                <p style="font-size: 1rem; margin-bottom: 1rem; color: #555;">Kelola About</p>
                <a href="{{route('about')}}" style="background-color: #007bff; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; text-decoration: none; display: inline-block;">Detail</a>
            </div>
        </div>

        <div style="background-color: #fff; border: 1px solid rgba(0,0,0,0.1); box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 1rem; overflow: hidden;">
            <img src="{{ asset('assets/images/service.png') }}" style="width: 100%; height: 200px; object-fit: cover;" alt="">
            <div style="padding: 1.25rem;">
                <h5 style="font-weight: bold; margin-bottom: 0.5rem; color: #007bff;">Service</h5>
                <p style="font-size: 1rem; margin-bottom: 1rem; color: #555;">Kelola service</p>
                <a href="{{route('services')}}" style="background-color: #007bff; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; text-decoration: none; display: inline-block;">Detail</a>
            </div>
        </div>

        <div style="background-color: #fff; border: 1px solid rgba(0,0,0,0.1); box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 1rem; overflow: hidden;">
            <img src="{{ asset('assets/images/cabang.png') }}" style="width: 100%; height: 200px; object-fit: cover;" alt="">
            <div style="padding: 1.25rem;">
                <h5 style="font-weight: bold; margin-bottom: 0.5rem; color: #007bff;">Cabang</h5>
                <p style="font-size: 1rem; margin-bottom: 1rem; color: #555;">Kelola Cabang</p>
                <a href="{{route('project')}}" style="background-color: #007bff; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; text-decoration: none; display: inline-block;">Detail</a>
            </div>
        </div>

        <div style="background-color: #fff; border: 1px solid rgba(0,0,0,0.1); box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 1rem; overflow: hidden;">
            <img src="{{ asset('assets/images/teams.png') }}" style="width: 100%; height: 200px; object-fit: cover;" alt="">
            <div style="padding: 1.25rem;">
                <h5 style="font-weight: bold; margin-bottom: 0.5rem; color: #007bff;">Team</h5>
                <p style="font-size: 1rem; margin-bottom: 1rem; color: #555;">Kelola Team</p>
                <a href="{{route('team')}}" style="background-color: #007bff; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; text-decoration: none; display: inline-block;">Detail</a>
            </div>
        </div>


    </div>
    <div style="text-align: center; padding-bottom: 20px;">
        @auth
        <form action="/logout" method="POST" style="display: inline;">
            @csrf
            <button type="submit" style="background-color: #343a40; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Logout</button>
        </form>
        @else
        <a href="/register" style="background-color: #dc3545; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; text-decoration: none;">Register</a>
        @endauth
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
