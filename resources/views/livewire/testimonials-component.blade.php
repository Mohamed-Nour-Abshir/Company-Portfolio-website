<div>
  @section('title')
  Testimonials
    @endsection
       <!-- ======= Breadcrumbs ======= -->
       <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Testimonials</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Testimonials</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container">
  
          <div class="row">
  
            @foreach ($testimonials as $testimonial)
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-item mt-4 mt-lg-0">
                  <img src="{{asset('assets/image/Testimoinal')}}/{{$testimonial->image}}" class="testimonial-img" alt="">
                  <h3>{{$testimonial->name}}</h3>
                  <h4>{{$testimonial->title}}</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$testimonial->comment}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
</div>
