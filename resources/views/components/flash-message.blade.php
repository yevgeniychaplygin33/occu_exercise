@if(session()->has('message'))
  <div x-data="{show: true}" x-init="setTimeout( () => show = false, 5000)" x-cloak x-show=show class="alert alert-danger">
    <p>{{ session('message') }}</p>
  </div>
@endif

@if(session()->has('success'))
  <div x-data="{show: true}" x-init="setTimeout( () => show = false, 5000)" x-cloak x-show=show class="alert alert-success ">
    <p>{{ session('success') }}</p>
  </div>
@endif