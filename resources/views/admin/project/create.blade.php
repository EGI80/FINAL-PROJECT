<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Dashboard Admin PT Usbarja</title>

    <!-- CSS -->
    <style>
        section {
            padding-top: 100px;
            padding-bottom: 50px;
        }

        /* Your existing styles here */

    </style>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    <h1 style="text-align: center;">Halaman Dashboard Admin PT Usbarja</h1>
    <h2 style="text-align: center;">Buat Project</h2>
    <div style="text-align: center; margin-bottom: 20px; padding-top: 20px;">
        <a href="/project" style="background-color: #4CAF50; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Kembali ke Project</a>
    </div>

    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" style="max-width: 500px; margin: 40px auto; padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf

        <div class="form-group mb-4">
            <label for="judul" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Judul</label>
            <input type="text" id="judul" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            @error('judul')
                <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="subjudul" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Sub Judul</label>
            <input type="text" id="subjudul" class="form-control @error('subjudul') is-invalid @enderror" name="subjudul" value="{{ old('subjudul') }}" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            @error('subjudul')
                <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="image" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Pilih Foto untuk Project</label>
            <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            @error('image')
                <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
    </form>

    @auth
    <form action="/logout" method="POST" style="text-align: center;">
        @csrf
        <button type="submit" class="btn btn-dark" style="background-color: #343a40; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Logout</button>
    </form>
    @else
    <button class="btn btn-danger" style="background-color: #dc3545; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Register</button>
    @endauth

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>

</html>
