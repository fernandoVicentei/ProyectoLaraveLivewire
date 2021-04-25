<div class="mt-10 sm:mt-0 shadow p-4">
<h2 class='font-weight-bold text-center mt-2 mb-4'>Mis Archivos</h2>
    <H2>Seleccione Archivos</H2>
    <select class='form-control' wire:model='itemarchivo'>
            <option > Seleccione un Archivo</option>
            @foreach($listarchivos as $va =>$valor)
            <option value="{{$valor['id']}}">{{$valor['titulo']}}</option>
            @endforeach
    </select>
    <h3 class='font-weight-bold  mt-2 mb-4'>Mis Archivos</h3>
        @foreach($archivoselegidos as $key=>$val)   
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" wire:click="borrararch({{$val['id']}})">&times;</button>
            <strong>{{$val['titulo']}}</strong>
        </div>
        @endforeach  
    <button class='btn btn-primary m-4' wire:click='actualizararchivopersona'>GUARDAR</button>
</div>
