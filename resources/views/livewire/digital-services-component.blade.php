<div>
    @section('title')
        Digital Services
    @endsection
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Digital services</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Digital services</li>
            </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
      
              <div class="row">
                @foreach ($digitalservices as $s_service)
                @if($s_service->type == 'digital')
                  <div class="col-lg-4 col-md-6 mb-5">
                    <div class="card">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title text-center mt-5"><a href="">{{$s_service->s_name}}</a></h4>
                        <p class="description px-3">{{$s_service->description}}</p>
                        <div class="d-flex justify-content-between px-3">
                          <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                          </div>
                          <p>({{$s_service->reviews}}+) Reviews</p>
                        </div>
                        <hr class="border border-danger border-1 opacity-50 w-100">
                        <div class="d-flex justify-content-between px-3">
                          <a class="buy-btn" href="{{route('order-service')}}">Buy</a>
                          <p class="mt-3">৳ {{$s_service->new_price}}</p>
                          <p class="mt-3 text-danger"><del>৳ {{$s_service->old_price}}</del></p>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
                @endforeach
              </div>
      
            </div>
          </section><!-- End Services Section -->
        
   <!-- ======= Cta Pricing Section ======= -->
    <section id="cta-pricing" class="cta-pricing">
      <div class="container">

          <div class="text-center">
              <h3>Unlock Your Potential</h3>
              <p>Discover how our tailored solutions can elevate your business to new heights. Let's collaborate to turn your vision into reality.</p>
              <a class="cta-btn" href="#">Get Started</a>
          </div>

      </div>
    </section><!-- End Cta Pricing Section -->

</div>
