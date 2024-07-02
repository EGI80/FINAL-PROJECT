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
    <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.project', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html><?php /**PATH D:\ProjectEgi\indahcargoconcat\resources\views/welcome.blade.php ENDPATH**/ ?>