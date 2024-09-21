<div>
   <div class="container">
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <p>
                    <i class="fas fa-table me-1"></i>
                    Website Banner
                </p>
                @if (Session::has('message'))
                    <div class="col-sm-12">
                        <div class="alert  alert-success alert-dismissible fade show" role="alert">
                            <span class="badge badge-pill badge-success">Success</span> {{Session::get('message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif 
                <a href="{{route('admin.banner.create')}}" class="btn btn-primary">Add Banner</a>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{++$i}}</td>
                            <td><img src="{{asset('assets/image/Banner')}}/{{$banner->image}}" alt="banner" width="50"></td>
                            <td>{{$banner->title}}</td>
                            <td>{{$banner->description}}</td>
                            <td>
                                <a href="{{route('admin.banner.update',['id'=>$banner->id])}}"><i class="fas fa-edit fa-2x text-success" title="Edit"></i></a>
                                <a href="#" onclick="confirm('Are you sure to Delete this Banner?') || event.stopImmediatePropagation()" wire:click.prevent="deleteBanner({{$banner->id}})">
                                    <i class="fas fa-remove text-danger fa-2x" title="Delete"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
   </div>
</div>
