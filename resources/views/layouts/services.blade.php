   <!-- Services -->
   <section class="services" id="services">
       <div class="container">
           <div class="services-box">
               <h1 class="fw-bold mb-3" data-aos="fade-up" data-aos-duration="1000">
                   Layanan :
               </h1>
               <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">

               </p>

               <div class="box pt-4 d-flex gap-3 flex-md-row flex-column">
               @foreach ($services as $service)
                   <div class="service p-4 shadow bg-danger text-white rounded-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                       <i class="fa-solid fa-folder-tree mb-3"></i>
                       <h4 class="mb-3 fw-bold"> {{$service->judul}}</h4>
                       <p class="lh-lg">
                       {{$service->subjudul}}
                       </p>
                   </div>
@endforeach
               </div>
           </div>
       </div>
   </section>
   <!-- Services -->
