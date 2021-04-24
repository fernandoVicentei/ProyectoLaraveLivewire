
<div class='form-group'>
<label >Nombre</label>
<input type="text" wire:model='nombrered' class='form-control'>
@error('nombrered') <span>{{$message}}</span>@enderror
</div>
<div class='form-group'>
<label >Dominio</label>
<input type="text" wire:model='dominio'  class='form-control'>
@error('dominio') <span>{{$message}}</span>@enderror
</div>
