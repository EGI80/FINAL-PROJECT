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

        /* hero */
        .hero-box img {
            width: 400px;
        }

        @media (max-width: 475px) {
            .hero-box img {
                width: 300px;
            }
        }

        /* hero */

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

<body>

    <h1 style="text-align: center;">Halaman Dashboard Admin PT Usbarja</h1>
    <h2 style="text-align: center;">Buat hero</h2>
    <div style="text-align: center; margin-bottom: 20px; padding-top:20px;">
        <a href="/hero" style="background-color: #4CAF50; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Kembali ke hero</a>
    </div>
    <form action="<?php echo e(route('hero.store')); ?>" method="POST" enctype="multipart/form-data" style="max-width: 500px; margin: 40px auto; padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <?php echo csrf_field(); ?>
        <div class="form-group mb-4">
            <label for="" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Masukan Judul</label>
            <input type="text" class="form-control <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="judul" value="<?php echo e(old('judul')); ?>" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group mb-4">
            <label for="" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Masukan Sub Judul</label>
            <input type="text" class="form-control <?php $__errorArgs = ['subjudul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="subjudul" value="<?php echo e(old('subjudul')); ?>" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            <?php $__errorArgs = ['subjudul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group mb-4">
            <label for="" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Pilih Photo Untuk hero</label>
            <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                <?php echo e($message); ?>

            </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
    </form>




    <?php if(auth()->guard()->check()): ?>
    <form action="/logout" method="POST" style="text-align: center;">
        <?php echo csrf_field(); ?>
        <button type=" submit" class="btn btn-dark" style="text-align:center; background-color: #343a40; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Logout</button>
    </form>
    <?php else: ?>
    <button class="btn btn-danger" style="background-color: #dc3545; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Register</button>
    <?php endif; ?>

</body>

</html><?php /**PATH D:\ProjectEgi\indahcargoconcat\resources\views/admin/hero/create.blade.php ENDPATH**/ ?>