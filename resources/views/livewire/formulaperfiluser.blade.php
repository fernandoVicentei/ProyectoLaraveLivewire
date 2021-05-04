<div class="mt-10 sm:mt-0 shadow p-4">
<h2 class='font-weight-bold text-center mt-2 mb-4'>Datos de Usuario</h2>
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name"  value="Name" class='mt-3'/>
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="name" />
            @error('name') <span>{{$message}}</span>@enderror            
</div>
<!-- Email -->
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="pass"  value="Password" class='mt-3'/>
            <x-jet-input id="pass" type="text" class="mt-1 block w-full" wire:model="password" />
            @error('password') <span>{{$message}}</span>@enderror
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="emaill"  value="Email" class='mt-2' />
            <x-jet-input id="emaill" type="email" class="mt-1 block w-full" wire:model="email" />
            @error('email') <span>{{$message}}</span>@enderror
</div>
        <!-- Email -->
        <div class="alert alert-success alert-dismissible mt-4" id='us' style='display:none;'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>ACTUALZADO!</strong>
        </div>
<button class='btn btn-primary m-4' wire:click='actualizaruser' onclick='mensajep()'>GUARDAR</button>
</div>
<script>
  //document.getElementById('ok').style.display='none';

  function mensajep(){
    document.getElementById('us').style.display='block';
   // document.getElementById('red').removeAttribute('d-none');;
    let contador=0;
    let df=setInterval(() => {
        if(contador==5){
            document.getElementById('us').style.display='none';
           // document.getElementById('red').setAttribute('d-none'); 
            clearInterval(df);
        }else{
           // this.setAttribute('disabled','disabled');           
            contador+=1;
        }
    }, 2000);    
  }
</script>