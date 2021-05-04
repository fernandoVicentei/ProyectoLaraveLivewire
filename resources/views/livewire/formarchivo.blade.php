<div class='form-group'>
<label >Titulo</label>
<input type="text" wire:model='titulo' class='form-control'>
@error('titulo') <span>{{$message}}</span>@enderror
</div>
<div class='form-group'>
<label >Autor</label>
<input type="text" wire:model='autor'  class='form-control'>
@error('autor') <span>{{$message}}</span>@enderror
</div>
<div class='form-group'>
<label >Editorial</label>
<input type="text" wire:model='editorial' class='form-control'>
@error('editorial') <span>{{$message}}</span>@enderror
</div>
<div class='form-group'>
<label >Fecha</label>
<input type="date" wire:model='fecha'  class='form-control'>
@error('fecha') <span>{{$message}}</span>@enderror
</div>

<div class='form-group'>
<label >Tipo</label>
<input type="text" wire:model='tipo'  class='form-control'>
@error('tipo') <span>{{$message}}</span>@enderror
</div>
<div class='form-group'>
<label >Archivo</label>
<input type="file" wire:model='url'  class='form-control' accept="application/pdf">
@error('url') <span>{{$message}}</span>@enderror
</div>
