<div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card mb-4 mt-4">`
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Edit Testimonials
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update'>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter the Name" wire:model='name'>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" class="form-control mt-3 @error('title') is-invalid @enderror" placeholder="Enter the Title" wire:model='title'>
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <textarea id="" cols="30" rows="10" class="form-control mt-3 @error('comment') is-invalid @enderror" placeholder="Add Message" wire:model='comment'></textarea>
                            @error('comment')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="file" class="form-control mt-3 @error('image') is-invalid @enderror" wire:model='newimage'>
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($newimage)
                                <img src="{{ $newimage->temporaryUrl() }}"  width="120">
                            @else
                                <img  src="{{asset('assets/image/Testimoinal')}}/{{$image}}"  width="120" alt="">
                            @endif
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button class="btn btn-success d-block mx-auto mt-3"><i class="fas fa-edit"></i> Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
</div>
