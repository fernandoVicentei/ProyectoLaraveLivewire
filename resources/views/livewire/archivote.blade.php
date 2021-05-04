<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 shadow mt-4">
<div class="row">
    <div class='col-sm-3'>
        @include("livewire.$archiv")
    </div>
    <div class="col-sm-9">
         @include('livewire.tablearch')
    </div>    
    <input wire:model='colorpanel' class='form-control' id='colorpa' type='hidden' > 
<input wire:model='colorpantalla' class='form-control' id='colorpant'  type='hidden'> 
</div>
</div>
<script>
window.onload = function () {
  document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpa').value;
  document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpant').value;
}
</script>
