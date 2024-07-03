<!-- resources/views/admin/project/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Halaman Dashboard Admin Indah Logistik</title>

    <!-- CSS -->
    <style>
        /* Your existing styles here */
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

    <h1 style="text-align: center;">Halaman Dashboard Admin Indah Logistik</h1>
    <h2 style="text-align: center;">Edit Project</h2>
    <div style="text-align: center; margin-bottom: 20px; padding-top:20px;">
        <a href="/project" style="background-color: #4CAF50; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Kembali ke Project</a>
    </div>

    <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data" style="max-width: 500px; margin: 40px auto; padding: 20px; background-color: #f9f9f9; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf
        @method('PUT') <!-- Use PUT method for update -->

        <div class="form-group mb-4">
            <label for="judul" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Judul</label>
            <input type="text" id="judul" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $project->judul) }}" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            @error('judul')
                <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="subjudul" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Sub Judul</label>
            <input type="text" id="subjudul" class="form-control @error('subjudul') is-invalid @enderror" name="subjudul" value="{{ old('subjudul', $project->subjudul) }}" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            @error('subjudul')
                <div class="invalid-feedback" style="color: red; font-size: 14px; margin-top: 10px;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="image" style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Pilih Gambar Untuk Project</label>
            <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image" style="width: 100%; height: 40px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
            <input type="hidden" name="old_image" value="{{ $project->image }}">
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

    <!-- Bootstrap JS and any other scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>

</html>
