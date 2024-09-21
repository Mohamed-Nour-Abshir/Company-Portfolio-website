<div>
    <div class="container">
     <div class="card mb-4">
         <div class="card-header">
             <div class="d-flex justify-content-between">
                 <p>
                     <i class="fas fa-table me-1"></i>
                     Website clippingpath
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
                 <a href="{{route('admin.clippingpath.create')}}" class="btn btn-primary">Add Clippingpath</a>
             </div>
         </div>
         <div class="card-body">
             <table id="datatablesSimple" class="table table-bordered">
                 <thead>
                     <tr>
                         <th>SL</th>
                         <th>Image</th>
                         <th>Name</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                
                 <tbody>
                     @php
                         $i = 0;
                     @endphp
                     @foreach ($clippingpaths as $clippingpath)
                         <tr>
                             <td>{{++$i}}</td>
                             <td><img src="{{asset('assets/image/Clippingpath')}}/{{$clippingpath->image}}" alt="banner" width="50"></td>
                             <td>{{$clippingpath->name}}</td>
                             <td>
                                 <a href="{{route('admin.clippingpath.update',['id'=>$clippingpath->id])}}"><i class="fas fa-edit fa-2x text-success" title="Edit"></i></a>
                                 <a href="#" onclick="confirm('Are you sure to Delete this clippingpath?') || event.stopImmediatePropagation()" wire:click.prevent="deleteClippingpath({{$clippingpath->id}})">
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
 