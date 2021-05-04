<div class="mt-10 sm:mt-0 shadow p-4">
<h2 class='font-weight-bold text-center mt-2 mb-4'>Mis Archivos</h2>
    <H6>Seleccione Archivos</H6>
    <select class='form-control' wire:model='itemarchivo'>
            <option > Seleccione un Archivo</option>
            @foreach($listarchivos as $va =>$valor)
            <option value="{{$valor['id']}}">{{$valor['titulo']}}</option>
            @endforeach
    </select>
    <!--mensaje -->
    <h5 class='font-weight-bold  mt-2 mb-4'>Mis Archivos</h5>
        @foreach($archivoselegidos as $key=>$val)   
        <div class="alert alert-primary alert-dismissible">
            <button type="button" class="close bg-dark" data-dismiss="alert" wire:click="borrararch({{$val['id']}})">&times;</button>
            <strong>Titulo: {{$val['titulo']}} <br> Autor: {{$val['autor']}}</strong><br>
        </div>
        @endforeach  
    <button class='btn btn-primary m-4' wire:click='actualizararchivopersona'>GUARDAR</button>
</div>