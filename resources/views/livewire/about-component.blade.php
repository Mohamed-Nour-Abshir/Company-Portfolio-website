<div>
    @section('title')
        About
    @endsection
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>About</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>About</li>
            </ol>
            </div>

        </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">Empowering Your Digital Presence</h3>
                            <p data-aos="fade-up">
                                At OurCompany, we specialize in crafting tailored digital solutions that propel businesses forward. Our passion lies in helping our clients achieve their goals by leveraging the latest technologies and innovative strategies.
                            </p>
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Customized Solutions</h4>
                                    <p>Every project we undertake is approached with a unique perspective, ensuring that our solutions perfectly align with our clients' objectives and requirements.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Exceptional Quality</h4>
                                    <p>We are committed to delivering excellence in everything we do. From design to development, our focus is on maintaining the highest standards of quality and craftsmanship.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-images"></i>
                                    <h4>Innovative Approach</h4>
                                    <p>Embracing creativity and innovation, we constantly push boundaries to create solutions that are not only functional but also visually captivating and user-friendly.</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-shield"></i>
                                    <h4>Reliable Support</h4>
                                    <p>Our dedication to client satisfaction extends beyond project completion. We provide ongoing support and maintenance to ensure smooth operations and peace of mind.</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->


    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Meet <strong>Our Team</strong></h2>
                <p>Get to know the talented individuals behind our success. Each member brings unique skills and expertise to the table, contributing to our shared vision and goals.</p>
            </div>

            <div class="row">

                @foreach ($teams as $team)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <img src="{{asset('assets/image/Team')}}/{{$team->image}}" class="img-fluid" alt="">
                            {{-- <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div> --}}
                        </div>
                        <div class="member-info">
                            <h4>{{$team->name}}</h4>
                            <span>{{$team->title}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Our Team Section -->


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
</div>
