<div class="mt-10 sm:mt-0 shadow p-4">
<h2 class='font-weight-bold text-center mt-2 mb-4'>Datos de Persona</h2>

<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name"  value="Nombre" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="nombre" />
            @error('nombre') <span>{{$message}}</span>@enderror
</div>
        <!-- Email -->
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email"  value="Apellidos" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model="apellidos" />
            @error('apellidos') <span>{{$message}}</span>@enderror
</div> 
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name"  value="Genero"/>
            <select class='form-control' wire:model="genero">
               <option selected='select'>Seleccione su genero</option>
               <option value='Masculino'>Masculino</option>
               <option value='Femenino'>Femenino</option>
            </select>            
            @error('genero') <span>{{$message}}</span>@enderror
</div>
        <!-- Email -->
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="fecha"  value="Fecha Nacimiento" />
            <x-jet-input id="fecha" type="date" class="mt-1 block w-full" wire:model="fechanacimiento" />
            @error('fechanacimiento') <span>{{$message}}</span>@enderror
</div> 
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="dir"  value="Direccion" />
            <x-jet-input id="dir" type="text" class="mt-1 block w-full" wire:model="direccion" />
            @error('direccion') <span>{{$message}}</span>@enderror
</div>
        <!-- Email -->
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telf"  value="Telefono" />
            <x-jet-input id="telf" type="number" class="mt-1 block w-full" wire:model="telefono" />
            @error('telefono') <span>{{$message}}</span>@enderror
</div>           
<div class="alert alert-success alert-dismissible mt-4" id='perso' style='display:none;'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>ACTUALZADO!</strong>
        </div>
<button class='btn btn-primary m-4' wire:click='actualizarpersona' onclick='mensajepp()'>GUARDAR</button>
</div>   
<script>
  //document.getElementById('ok').style.display='none';

  function mensajepp(){
    document.getElementById('perso').style.display='block';
   // document.getElementById('red').removeAttribute('d-none');;
    let contador=0;
    let df=setInterval(() => {
        if(contador==5){
            document.getElementById('perso').style.display='none';
           // document.getElementById('red').setAttribute('d-none'); 
            clearInterval(df);
        }else{
           // this.setAttribute('disabled','disabled');           
            contador+=1;
        }
    }, 2000);    
  }
</script>