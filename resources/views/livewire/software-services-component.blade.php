<div>
    @section('title')
        Software Services
    @endsection
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Software Services</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Software Services</li>
            </ol>
            </div>

        </div>
        </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
  
          <div class="row">
            @foreach ($s_services as $s_service)
            @if($s_service->type == 'software')
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

    <!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Explore Our <strong>Capabilities</strong></h2>
      <p>Discover the wide range of features and services we offer to enhance your experience and meet your needs.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <h4>Custom Solutions</h4>
              <p>We tailor our solutions to fit your specific requirements, ensuring optimal results.</p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <h4>User Experience</h4>
              <p>We prioritize user experience, creating intuitive designs for seamless interaction.</p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <h4>Responsive Design</h4>
              <p>Our designs are responsive across all devices, ensuring accessibility and functionality.</p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <h4>Technical Expertise</h4>
              <p>Benefit from our team's technical expertise and industry knowledge for robust solutions.</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <figure>
              <img src="assets/img/features-1.png" alt="" class="img-fluid">
            </figure>
          </div>
          <div class="tab-pane" id="tab-2">
            <figure>
              <img src="assets/img/features-2.png" alt="" class="img-fluid">
            </figure>
          </div>
          <div class="tab-pane" id="tab-3">
            <figure>
              <img src="assets/img/features-3.png" alt="" class="img-fluid">
            </figure>
          </div>
          <div class="tab-pane" id="tab-4">
            <figure>
              <img src="assets/img/features-4.png" alt="" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

</div>
