<div class="mt-10 sm:mt-0 shadow p-4">
<h2 class='font-weight-bold text-center mt-2 mb-4'>Datos de Redes Sociales</h2>
    <H6>Seleccione red social</H6>
        <select class='form-control' wire:model='item'>
            <option > Seleccione un valor</option>
            @foreach($vect as $va =>$valor)
            <option value="{{$valor['id']}}">{{$valor['nombrered']}}</option>
            @endforeach
        </select>
        <div class="alert alert-success alert-dismissible mt-4" id='red' style='display:none;'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>ACTUALZADO!</strong>
        </div>
        <button class='btn btn-primary m-4' wire:click='actualizarredespersona' onclick='mensajer()'>GUARDAR</button>
        <!--mensaje-->
        <h5 class='font-weight-bold  mt-2 mb-4'>Mis redes sociales</h5>
        @foreach($elegidos as $key=>$val)   
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close bg-dark" data-dismiss="alert" wire:click="borrar({{$val['id']}})">&times;</button>
            <strong>Nombre: {{$val['nombrered']}} <br> Dominio: {{$val['dominio']}}</strong>
        </div>
        @endforeach
    
</div>
<script>
  //document.getElementById('ok').style.display='none';

  function mensajer(){
    document.getElementById('red').style.display='block';
   // document.getElementById('red').removeAttribute('d-none');;
    let contador=0;
    let df=setInterval(() => {
        if(contador==5){
            document.getElementById('red').style.display='none';
           // document.getElementById('red').setAttribute('d-none'); 
            clearInterval(df);
        }else{
           // this.setAttribute('disabled','disabled');           
            contador+=1;
        }
    }, 2000);    
  }
</script>