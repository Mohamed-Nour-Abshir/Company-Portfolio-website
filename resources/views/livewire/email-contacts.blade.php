<div>
    @if(session()->has('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif
<form wire:submit.prevent='contact' class="php-email-form">
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" wire:model='name'>
      @error('name')
          <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" wire:model='email'>
      @error('email')
          <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
  </div>
  <div class="form-group mt-3">
    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" placeholder="Subject" wire:model='subject'>
    @error('subject')
        <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="form-group mt-3">
    <textarea class="form-control @error('message') is-invalid @enderror" rows="5" placeholder="Message" wire:model='message'></textarea>
    @error('message')
        <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="text-center"><button type="submit">Send Message</button></div>
</form>
</div>
