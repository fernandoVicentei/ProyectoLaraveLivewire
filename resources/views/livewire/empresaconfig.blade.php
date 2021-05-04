<form   wire:submit.prevent="prueba">
<div class='container m-5 p-4 mx-auto bg-dark'>
<h2 class='text-center '>EMPRESA</h2>
<div class="form-group">
<h3>Imagen Logo</h3>
<input wire:model='foto' class="form-control-file border" type="file" value="" accept='image/*'>
@error('foto') <span class="error">{{ $message }}</span> @enderror
  </div>
  <div class="form-group">
  <h3>Imagen Empresa</h3>
<input wire:model='fotoempresa' class="form-control-file border" type="file" value="" placaholder='Imagen'>
@error('fotoempresa') <span class="error">{{ $message }}</span> @enderror
  </div>
  <div class="form-group">
  <h3>Color Panel</h3>
<input wire:model='colorpanel' class="form-control" type="color" value="" id='colorpan' onchange='prueba()'>
@error('colorpanel') <span class="error">{{ $message }}</span> @enderror
  </div>
  <div class="form-group">
  <h3>Color Pantalla</h3>
  <input wire:model='colorpantalla' class="form-control" type="color" value="" id='colorpantalla' onchange='pruebapantalla()'>
  @error('colorpantalla') <span class="error">{{ $message }}</span> @enderror
<input wire:model='colorpanel' class='form-control' id='colorpa' type='hidden' > 
<input wire:model='colorpantalla' class='form-control' id='colorpant'  type='hidden'> 
 </div>
 <button type='submit' class='btn btn-success' >ENVIAR</button>
</div>
</form>
<script>
window.onload = function () {
  document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpa').value;
  document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpant').value;
}
function prueba(){
  document.querySelectorAll('.color')[0].style.backgroundColor=document.getElementById('colorpan').value;
}
function pruebapantalla(){
  document.getElementsByClassName('cuerpo')[0].style.backgroundColor=document.getElementById('colorpantalla').value;
}
</script>