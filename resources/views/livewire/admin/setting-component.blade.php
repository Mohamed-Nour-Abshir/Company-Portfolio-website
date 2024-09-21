<div>
    <div class="container">
     <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
             <div class="card mb-4 mt-4">
                 <div class="card-header">
                     <i class="fas fa-table me-1"></i>
                    Website Settings
                 </div>
                 <div class="card-body">
                     <form wire:submit.prevent='settings'>
                        <label for="">Company Name</label>
                         <input type="text" class="form-control mb-3 @error('company_name') is-invalid @enderror" wire:model='company_name'>
                         @error('company_name')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Company Logo</label>
                         <input type="file" class="form-control mb-3 @error('newimage') is-invalid @enderror" wire:model='newimage'>
                         <div wire:loading wire:target="image">Uploading...</div>
                            @if ($newimage)
                                <img src="{{ $newimage->temporaryUrl() }}"  width="120" class="mb-3"> <br>
                            @else
                                <img  src="{{asset('assets/image/Settings')}}/{{$company_logo}}"  width="120" alt=""> <br><br>
                            @endif
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                         <label for="">Company Email</label>
                         <input type="text" class="form-control mb-3 @error('company_email') is-invalid @enderror" wire:model='company_email'>
                         @error('company_email')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Company Phone</label>
                         <input type="text" class="form-control mb-3 @error('company_phone') is-invalid @enderror" wire:model='company_phone'>
                         @error('company_phone')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Company Address</label>
                         <textarea id="" cols="30" rows="10" class="form-control mb-3 @error('company_address') is-invalid @enderror" wire:model='company_address'></textarea>
                         @error('company_address')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Company Map Link</label>
                         <input type="text" class="form-control mb-3 @error('company_map') is-invalid @enderror" wire:model='company_map'>
                         @error('company_map')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Facebook Link</label>
                         <input type="text" class="form-control mb-3 @error('facebook') is-invalid @enderror" wire:model='facebook'>
                         @error('facebook')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Twitter Link</label>
                         <input type="text" class="form-control mb-3 @error('twitter') is-invalid @enderror" wire:model='twitter'>
                         @error('twitter')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Instagram Link</label>
                         <input type="text" class="form-control mb-3 @error('instigram') is-invalid @enderror" wire:model='instigram'>
                         @error('instigram')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                         <label for="">Linkedin Link</label>
                         <input type="text" class="form-control mb-3 @error('linkedin') is-invalid @enderror" wire:model='linkedin'>
                         @error('linkedin')
                             <span class="text-danger">{{$message}}</span>
                         @enderror
                        
                         <div class="card-footer mt-3">
                             <button class="btn btn-success d-block mx-auto mt-3"><i class="fas fa-edit"></i> Update</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <div class="col-md-2"></div>
     </div>
    </div>
     
 </div>
 