<div class="mt-10 sm:mt-0 shadow p-4">
<h2 class='font-weight-bold text-center mt-2 mb-4'>Datos de Redes Sociales</h2>
    <H2>Seleccione red social</H2>
        <select class='form-control' wire:model='item'>
            <option > Seleccione un valor</option>
            @foreach($vect as $va =>$valor)
            <option value="{{$valor['id']}}">{{$valor['nombrered']}}</option>
            @endforeach
        </select>
        <h3 class='font-weight-bold  mt-2 mb-4'>Mis redes sociales</h3>
        @foreach($elegidos as $key=>$val)   
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" wire:click="borrar({{$val['id']}})">&times;</button>
            <strong>{{$val['nombrered']}}</strong>
        </div>
        @endforeach     
    <button class='btn btn-primary m-4' wire:click='actualizarredespersona'>GUARDAR</button>
</div>
