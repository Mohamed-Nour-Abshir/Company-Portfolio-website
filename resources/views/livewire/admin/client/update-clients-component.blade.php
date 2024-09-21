<div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card mb-4 mt-4">`
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Edit Client
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update'>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter the name" wire:model='name'>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="file" class="form-control mt-3 @error('image') is-invalid @enderror" wire:model='newimage'>
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($newimage)
                                <img src="{{ $newimage->temporaryUrl() }}"  width="120">
                            @else
                                <img  src="{{asset('assets/image/client')}}/{{$image}}"  width="120" alt="">
                            @endif
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button class="btn btn-success d-block mx-auto mt-3"><i class="fas fa-edit"></i> update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
</div>
