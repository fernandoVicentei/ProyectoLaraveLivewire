<div class="mt-10 sm:mt-0 shadow p-4">
<h2 class='font-weight-bold text-center mt-2 mb-4'>Datos de Usuario</h2>
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name"  value="Name" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="name" />
            @error('name') <span>{{$message}}</span>@enderror
            
</div>
<!-- Email -->
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="pass"  value="Password" />
            <x-jet-input id="pass" type="text" class="mt-1 block w-full" wire:model="password" />
            @error('password') <span>{{$message}}</span>@enderror
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="emaill"  value="Email" />
            <x-jet-input id="emaill" type="email" class="mt-1 block w-full" wire:model="email" />
            @error('email') <span>{{$message}}</span>@enderror
           
</div>
        <!-- Email -->
<div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email"  value="Rol" />
            <select wire:model="rol" class='form-control' >
                <option selected>Seleccione</option>
                <option value='1'>Administrador</option>
                <option value='2'>Usuario</option>
            </select>
            @error('rol') <span>{{$message}}</span>@enderror
</div> 
<button class='btn btn-primary m-4' wire:click='actualizaruser'>GUARDAR</button>
</div>