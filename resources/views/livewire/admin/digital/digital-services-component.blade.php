<div>
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <p>
                        <i class="fas fa-table me-1"></i>
                        Digital Services
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
                    <a href="{{route('admin.digital-services.create')}}" class="btn btn-primary">Add Service</a>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Service name</th>
                            <th>Description</th>
                            <th>Reviews</th>
                            <th>Old Price</th>
                            <th>New Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($s_services as $s_service)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$s_service->s_name}}</td>
                                <td>{{$s_service->description}}</td>
                                <td>{{$s_service->reviews}}</td>
                                <td><del class="text-danger">{{$s_service->old_price}}</del></td>
                                <td>{{$s_service->new_price}}</td>
                                <td>
                                    <a href="{{route('admin.digital-services.update',['id'=>$s_service->id])}}"><i class="fas fa-edit fa-2x text-success" title="Edit"></i></a>
                                    <a href="#" onclick="confirm('Are you sure to Delete this Service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{$s_service->id}})">
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
