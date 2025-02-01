{{-- form --}}
<div class="row">
@if (session('message'))
<div class="alert alert-success fs-4">
    {{session('message') }}
</div>
    
@endif

    @include('livewire.admin.admin-user.form')


    {{-- list --}}

    @include('livewire.admin.admin-user.table')
</div>
