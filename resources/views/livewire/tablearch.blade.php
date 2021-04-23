<h2>LISTADO DE LIBROS</h2>

<table class="table">
<thead class='bg-dark text-light'>
    <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>AUTOR</th>
        <th>EDITORIAL</th>
        <th>FECHA</th>
        <th>TIPO</th>
        <th></th>
    </tr>
</thead>      
<tbody>
        @foreach($archivo as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->titulo}}</td>
            <td>{{$post->autor}}</td>
            <td>{{$post->editorial}}</td>
            <td>{{$post->fecha}}</td>
            <td>{{$post->tipo}}</td>
            <td>
            <button class='btn btn-primary' wire:click=''>
            EDITAR
            </button>
            </td>           
        </tr>
        @endforeach
</tbody>
</table>
{{$archivo->links()}}