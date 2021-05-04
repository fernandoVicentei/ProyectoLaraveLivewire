<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 shadow mt-4">

@include('livewire.tableus')

<input wire:model='colorp' class='form-control' id='colorpa' type='hidden' >
<input wire:model='colorpantalla' class='form-control' id='colorpant' type='hidden' > 
</div>
<script>
window.onload = function () {
  document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpa').value;
  document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpant').value;
}

</script>