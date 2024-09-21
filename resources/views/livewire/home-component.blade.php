<div>
  @section('title')
        Home
    @endsection
      <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        @foreach ($banners as $banner)
          <div class="carousel-item active" style="background-image: url({{asset('assets/image/Banner')}}/{{$banner->image}});" data-bs-interval="5000">
            <div class="carousel-container">
              <div class="carousel-content animate__animated animate__fadeInUp">
                <h2>{{$banner->title}}</h2>
                <p>{{$banner->description}}</p>
                <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
              </div>
            </div>
          </div>
        @endforeach

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <main id="main">

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container">

    <div class="row">
      <div class="col-lg-9 text-center text-lg-left">
        <h3>We've created more than <span>200 websites</span> this year!</h3>
        <p>We've built websites, apps, provided business marketing, and digital marketing solutions this year!</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="{{route('order-service')}}">Request a quote</a>
      </div>
    </div>

  </div>
</section><!-- End Cta Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          @foreach ($s_services as $s_service)
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
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All Previous Projects</li>
              <!-- <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
          @foreach ($clippingpaths as $clippingpath)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="{{asset('assets/image/Clippingpath')}}/{{$clippingpath->image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$clippingpath->name}}</h4>
                <a href="{{asset('assets/image/Clippingpath')}}/{{$clippingpath->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

<!-- ======= Our Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Our <strong>Clients</strong></h2>
      <p>We work with a diverse range of clients, catering to their unique needs and preferences. Our commitment to excellence ensures that each client receives personalized solutions that drive their success forward.</p>
    </div>

    <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

      @foreach ($clients as $client)
        <div class="col-lg-3 col-md-4 col-xs-6">
          <div class="client-logo">
            <img src="{{asset('assets/image/Client')}}/{{$client->image}}" class="img-fluid" alt="">
          </div>
        </div>
      @endforeach

    </div>

  </div>
</section><!-- End Our Clients Section -->


  </main><!-- End #main -->
</div>