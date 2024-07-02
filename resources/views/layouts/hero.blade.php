<!-- Hero -->
<section class="hero overflow-hidden" style="background-color: #ffffff;" >

    <div class="container">
        @foreach ($heros as $hero)
        <div class="hero-box d-flex align-items-center justify-content-between flex-md-row flex-column gap-md-0 gap-5">
            <div class="box animate__animated animate__fadeInLeft animate__delay-1s">
                <h1 class="fw-bold mb-3">
                    {{$hero->judul}}<br />
                    <span class="text-danger"> {{$hero->subjudul}}</span> <br />
                </h1>
            </div>
            <div class="box animate__animated animate__fadeInRight animate__delay-1s">
                <img src="{{ asset('storage/hero/' . $hero->image) }}" alt="Hero Image" />
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Hero -->
