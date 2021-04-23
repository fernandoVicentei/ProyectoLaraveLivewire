<h2>LISTADO DE REDES SOCIALES</h2>

<table class="table">
<thead class='bg-dark text-light'>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DOMINIO</th>       
        <th colspan="2"></th>
    </tr>
</thead>      
<tbody>
        @foreach($red as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->nombrered}}</td>
            <td>{{$post->dominio}}</td>           
            <td>
            <button class='btn btn-primary' wire:click=''>
            EDITAR
            </button>
            </td>           
        </tr>
        @endforeach
</tbody>
</table>
{{$red->links()}}