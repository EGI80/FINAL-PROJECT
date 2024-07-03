<!-- Hero -->
<section class="hero overflow-hidden" style="background-color: #ffffff;" >
<div class="jumbotron " style="height: 70vh; margin-top:-120px; background-image: url('https://i.ibb.co.com/wsfvT2X/jumbotron-oren.png'); background-size: cover;
        background-position: center;
        background-repeat: no-repeat;">
    <div class="container" style="padding-top:100px;">
        @foreach ($heros as $hero)
        <div class="hero-box d-flex align-items-center justify-content-between flex-md-row flex-column gap-md-0 gap-5 ">
            <div class="box animate__animated animate__fadeInLeft animate__delay-1s">
                <h1 class="fw-bold mb-3" style="color: #ffffff;">
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
    </div>
</section>
<!-- Hero -->
