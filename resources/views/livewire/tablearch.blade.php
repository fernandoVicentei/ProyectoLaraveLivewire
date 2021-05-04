<h2>LISTADO DE LIBROS</h2>

<table class="table table-responsive">
<thead class='bg-dark text-light '>
    <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>AUTOR</th>
        <th>EDITORIAL</th>
        <th>FECHA</th>
        <th>TIPO</th>
        <th>URL</th>
        <th colspan='2'></th>
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
            <td>{{$post->url}}</td>
            <td>
            <button class='btn btn-primary' wire:click='editar({{$post->id}})' >
                    EDITAR
            </button>
            <button class='btn btn-danger' wire:click="destroy({{$post->id}})" onclick='mensaje(this)' id='{{$post->id}}'>
                    ELIMINAR
            </button>
            </td>           
        </tr>
        @endforeach
</tbody>
</table>
<script>
  //document.getElementById('ok').style.display='none';
  function mensaje(e)
  {
      alert('ELIMINADO CORRECTAMENTE'); 
  }
  
</script>