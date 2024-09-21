<div>
    <div class="container">
     <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
             <div class="card mb-4 mt-4">
                 <div class="card-header">
                     <i class="fas fa-table me-1"></i>
                     Add Software Service
                 </div>
                 <div class="card-body">
                     <form wire:submit.prevent='create'>
                         <input type="text" class="form-control @error('s_name') is-invalid @enderror" placeholder="Enter the Service Name" wire:model='s_name'>
                         @error('s_name')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <textarea id="" cols="30" rows="10" class="form-control mt-3 @error('description') is-invalid @enderror" placeholder="Add Description" wire:model='description'></textarea>
                         @error('description')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <input type="text" class="form-control mt-3 @error('reveiws') is-invalid @enderror" placeholder="Enter the Service reviews" wire:model='reveiws'>
                         @error('reveiws')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <input type="text" class="form-control mt-3 @error('old_price') is-invalid @enderror" placeholder="Enter the Old Price" wire:model='old_price'>
                         @error('old_price')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <input type="text" class="form-control mt-3 @error('new_price') is-invalid @enderror" placeholder="Enter the New Price" wire:model='new_price'>
                         @error('new_price')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                        
                         <div class="card-footer mt-3">
                             <button class="btn btn-primary d-block mx-auto mt-3"><i class="fas fa-save"></i> Save</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <div class="col-md-2"></div>
     </div>
    </div>
     
 </div>
 