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

<body style="font-family: Arial, sans-serif; background: #f4f4f9; margin: 0; padding: 20px;">

    <h1 style="text-align: center; color: #333;">Halaman Dashboard Admin IndahCargoLogistik</h1>
    <h2 style="text-align: center; color: #555;">Edit hero</h2>

    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('hero.create') }}" style="background-color: #337ab7; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block;">Buat hero</a>
        <a href="/dashboard" style="background-color: #4CAF50; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Kembali ke Dashboard</a>
    </div>


    <div style="overflow-x: auto; width: 100%; padding: 10px; border: 1px solid #ddd; background: #fff; border-radius: 10px;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th style="background-color: #f0f0f0; border-bottom: 1px solid #ddd; padding: 10px; text-align: left;">Image</th>
                    <th style="background-color: #f0f0f0; border-bottom: 1px solid #ddd; padding: 10px; text-align: left;">Judul</th>
                    <th style="background-color: #f0f0f0; border-bottom: 1px solid #ddd; padding: 10px; text-align: left;">SubJudul</th>
                    <th style="background-color: #f0f0f0; border-bottom: 1px solid #ddd; padding: 10px; text-align: left;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($heros as $hero)
                <tr style="background-color: #f9f9f9;">
                    <td style="width: 150px; padding: 10px;">
                        <img src="{{ asset('storage/hero/'.$hero->image) }}" height="100" style="border-radius: 10px; width: 100%; object-fit: cover;">
                    </td>
                    <td style="width: 300px; padding: 10px;">{{ $hero->judul }}</td>
                    <td style="width: 300px; padding: 10px;">{{ $hero->subjudul }}</td>
                    <td style="width: 150px; text-align: center; padding: 10px;">
                        <a href="{{ route('hero.edit', $hero->id) }}" class="btn btn-warning" style="background-color: #ffc107; color: #ffffff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none;">Edit</a>
                        <form action="{{ route('hero.destroy', $hero->id) }}" method="POST" class="d-inline" style="display: inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: #ffffff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        @auth
        <form action="/logout" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-dark" style="background-color: #343a40; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Logout</button>
        </form>
        @else
        <button class="btn btn-danger" style="background-color: #dc3545; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Register</button>
        @endauth
    </div>

</body>

</html>