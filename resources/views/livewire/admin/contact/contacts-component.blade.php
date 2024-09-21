<div>
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <p>
                        <i class="fas fa-table me-1"></i>
                        All Contacts 
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
                    {{-- <a href="{{route('admin.software-services.create')}}" class="btn btn-primary">Add Service</a> --}}
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->subject}}</td>
                                <td>{{$contact->message}}</td>
                                <td>
                                    <a href="#" onclick="confirm('Are you sure to Delete this Contact?') || event.stopImmediatePropagation()" wire:click.prevent="deleteContact({{$contact->id}})">
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
