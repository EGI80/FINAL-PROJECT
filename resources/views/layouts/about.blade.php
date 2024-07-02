<!-- About -->
<section class="about" id="about">
    <div class="container">
        @foreach ($abouts as $about)
        <div class="about-box text-center">
            <h1 class="fw-bold mb-4" data-aos="fade-up" data-aos-duration="1000">
                Tentang Kami
            </h1>
            <p class="lh-lg mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                {{$about->judul}}
            </p>
            <img src="{{ asset('storage/about/' . $about->image) }}" alt="About Image" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" />
        </div>
        @endforeach
    </div>
</section>
<!-- About -->