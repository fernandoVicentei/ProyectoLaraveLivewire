<h2>LISTADO DE USUARIOS</h2>

<table class="table">
<thead class='bg-dark text-light'>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>ROL</th>
        <th colspan="2"></th>
    </tr>
</thead>      
<tbody>
        @foreach($usuarios as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->email}}</td>
            <td>{{$post->password}}</td>
            <td>{{$post->rol}}</td>
            <td>
            <button class='btn btn-primary' wire:click=''>
            EDITAR
            </button>
            </td>           
        </tr>
        @endforeach
</tbody>
</table>
{{$usuarios->links()}}