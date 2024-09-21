<div>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card mb-4 mt-4">`
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Add Team
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='create'>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter the Name" wire:model='name'>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" class="form-control mt-3 @error('title') is-invalid @enderror" placeholder="Enter the Title" wire:model='title'>
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="file" class="form-control mt-3 @error('image') is-invalid @enderror" wire:model='image'>
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="120">
                            @endif
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button class="btn btn-primary d-block mx-auto mt-3"><i class="fas fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
</div>
