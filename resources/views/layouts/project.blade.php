<!-- Projects -->
<section class="projects overflow-hidden" id="projects">
    <div class="container px-4">
        <div class="projects-box">
            <h1 class="fw-bold mb-3 text-center" data-aos="fade-up" data-aos-duration="1000">
                Cabang kami 
            </h1>
            <p class="text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"></p>
            <div class="row justify-content-center pt-4 gap-4">
            @foreach ($projects as $project)
                <div class="col col-md-5 col-12 shadow p-3 rounded" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">

                    <img src="{{ asset('storage/project/' . $project->image) }}" alt="Projects Image" width="100%" />
                    <h4 class="pt-4">{{$project->judul}}</h4>
                    <p>
                    {{$project->subjudul}}
                    </p>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Projects -->
