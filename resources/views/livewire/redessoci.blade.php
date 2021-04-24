<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 shadow mt-4">
<div class="row">
    <div class='col-sm-3'>
        @include("livewire.$redv")
    </div>
    <div class="col-sm-9">
        @include('livewire.tablared')
    </div>    
    <select class='form-control' wire:model='item'>
        <option > Seleccione un valor</option>
        @foreach($vect as $va)
        <option value='{{$va}}'>{{$va}}</option>
       @endforeach
    </select>
    <H2>{{$item}}</H2>
    @foreach($clon as $val)   
   <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" wire:click='borrar({{$val}})'>&times;</button>
  <strong>{{$val}}</strong> SI
</div>
    @endforeach
   
</div>
</div>
<div class="card-body">


</div>
