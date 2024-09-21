<div>
    @section('title')
        Order now
    @endsection
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <h2>Order now</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Order Service</li>
            </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container">

            <div class="row no-gutters">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
                <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1">
                    @if(session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form wire:submit.prevent='orderNow'>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name" wire:model='name'>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email" wire:model='email'>
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter your Phone" wire:model='phone'>
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Select service</label>
                            <select id="" class="form-select @error('service_type') is-invalid @enderror" wire:model='service_type'>
                                <option value="">Please Select service</option>
                                @foreach ($services as $service)
                                    <option value="{{$service->s_name}}">{{$service->s_name}}</option>
                                @endforeach
                            </select>
                            @error('service_type')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button class="btn btn-outline-danger d-block mx-auto form-control">Order</button>
                    </form>
                </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->
    
</div>
