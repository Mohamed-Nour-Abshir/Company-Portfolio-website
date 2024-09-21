<div>
  @section('title')
        Clippingpath
    @endsection
       <!-- ======= Breadcrumbs ======= -->
       <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Clippingpath</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Clippingpath</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
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
</div>
