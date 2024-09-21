<div>
  @section('title')
        Contact
    @endsection
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
      
              <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                  <li><a href="/">Home</a></li>
                  <li>Contact</li>
                </ol>
              </div>
      
            </div>
          </section><!-- End Breadcrumbs -->
      
          <!-- ======= Contact Section ======= -->
          <div class="map-section">
            <iframe style="border:0; width: 100%; height: 350px;" src="{{$settings->company_map}}" frameborder="0" allowfullscreen></iframe>
          </div>
      
          <section id="contact" class="contact">
            <div class="container">
      
              <div class="row justify-content-center" data-aos="fade-up">
      
                <div class="col-lg-10">
      
                  <div class="info-wrap">
                    <div class="row">
                      <div class="col-lg-4 info">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>{{$settings->company_address}}</p>
                      </div>
      
                      <div class="col-lg-4 info mt-4 mt-lg-0">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{$settings->company_email}}</p>
                      </div>
      
                      <div class="col-lg-4 info mt-4 mt-lg-0">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>{{$settings->company_phone}}</p>
                      </div>
                    </div>
                  </div>
      
                </div>
      
              </div>
      
              <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                  <livewire:email-contacts /> 
                </div>
      
              </div>
      
            </div>
          </section><!-- End Contact Section -->
</div>
